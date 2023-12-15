<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Models\Status;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StatusStoreRequest;
use App\Http\Requests\StatusUpdateRequest;
use Illuminate\Support\Facades\Http;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Status::class);

        $search = $request->get('search', '');

        $statusesWithProvider = Status::with('ussProvider')
            ->where(function ($query) use ($search) {
                $query->where('status', 'like', '%' . $search . '%')
                    ->orWhereHas('ussProvider', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    });
            })
            ->latest()
            ->paginate(10)
            // ->withQueryString(); //? Linter accuses error but everything is fine
            ->appends(['search' => $request->search]); // Alternative

        return view('app.statuses.index', compact('statusesWithProvider', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Status::class);

        return view('app.statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StatusStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Status::class);

        $validated = $request->validated();

        $status = Status::create($validated);

        return redirect()
            ->route('statuses.edit', $status)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Status $status): View
    {
        $this->authorize('view', $status);

        return view('app.statuses.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Status $status): View
    {
        $this->authorize('update', $status);

        return view('app.statuses.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        StatusUpdateRequest $request,
        Status $status
    ): RedirectResponse {
        $this->authorize('update', $status);

        $validated = $request->validated();

        $status->update($validated);
        // Skip validation
        // $status->update(['status' => $request->input('status')]);

        if ($status->status == \App\Enums\StatusEnum::APROVADO()) {
            $response = Http::get('http://127.0.0.1:8001/api/bearer');

            if ($response->successful() && $response->ok()) {
                $ussProvider = $status->ussProvider;
                $token = $response->json()['token'];

                $ussProvider->token = $token;
                $ussProvider->save();
            } else {
                return redirect()
                    ->back()
                    ->with('danger', 'An error occurred');
            }
        } else {
            $ussProvider = $status->ussProvider;
            $ussProvider->token = null;
            $ussProvider->save();
        }

        return redirect()
            ->route('statuses.index', $status)
            ->with('success', __('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Status $status): RedirectResponse
    {
        $this->authorize('delete', $status);

        $status->delete();

        return redirect()
            ->route('statuses.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
