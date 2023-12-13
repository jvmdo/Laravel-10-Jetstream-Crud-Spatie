@php
    use App\Enums\StatusEnum;

    $statuses = StatusEnum::toLabels();
    $currentStatus = $status->status;
@endphp

<div class="flex flex-wrap">
    <div class="px-4">
        <div class="py-2">
            @foreach ($statuses as $s)
                <div>
                    <x-inputs.radio id="{{ $s }}" name="status" label="{{ $s }}"
                        value="{{ $s }}" :checked="$currentStatus == $s"></x-inputs.radio>
                </div>
            @endforeach
        </div>
    </div>
</div>
