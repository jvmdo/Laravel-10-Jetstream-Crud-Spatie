<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Models\UssProvider;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UssProviderStoreRequest;
use App\Http\Requests\UssProviderUpdateRequest;
use App\Models\Status;
use App\Models\User;

class UssProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', UssProvider::class);

        $user_id = auth()->id();
        $search = $request->get('search', '');

        $uss_providers = UssProvider::search($search)
            ->where('user_id', $user_id)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        $userHasUssProvider = auth()->user()->ussProvider;

        return view('app.uss-providers.index', compact('uss_providers', 'search', 'userHasUssProvider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', UssProvider::class);

        return view('app.uss-providers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UssProviderStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', UssProvider::class);

        // TODO: unique user_id
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        // TODO: change to singular
        $uss_providers = UssProvider::create($validated);
        $uss_providers->status()->create();

        return redirect()
            ->route('uss-providers.index', $uss_providers)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, UssProvider $uss_provider): View
    {
        $this->authorize('view', $uss_provider);

        return view('app.uss-providers.show', compact('uss_provider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, UssProvider $uss_provider): View
    {
        $this->authorize('update', $uss_provider);

        $uss_provider->status()->update([
            'status' => StatusEnum::EM_ANALISE(),
        ]);

        return view('app.uss-providers.edit', compact('uss_provider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UssProviderUpdateRequest $request,
        UssProvider $uss_provider
    ): RedirectResponse {
        $this->authorize('update', $uss_provider);

        $validated = $request->validated();

        $uss_provider->update($validated);

        return redirect()
            ->route('uss-providers.edit', $uss_provider)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, UssProvider $uss_provider): RedirectResponse
    {
        $this->authorize('delete', $uss_provider);

        $uss_provider->delete();

        return redirect()
            ->route('uss-providers.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
