<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            USS Provider Details
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                @php
                    $status = $uss_provider->status->status;
                    $status_name = $uss_provider->status->status;
                    $statusColors = [
                        App\Enums\StatusEnum::EM_ANALISE()->label => 'yellow',
                        App\Enums\StatusEnum::APROVADO()->label => 'green',
                        App\Enums\StatusEnum::REPROVADO()->label => 'red',
                    ];
                    $color = $statusColors[$status_name];
                @endphp

                <div
                    class="flex items-center p-4 text-sm rounded-lg bg-gray-100 text-{{ $color }}-500 border border-{{ $color }}-800">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 text-{{ $color }}-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div>
                        <span class="font-medium">Status:</span> {{ implode(' ', explode('_', $status_name)) }}
                    </div>
                </div>
            </x-partials.card>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('uss-providers.index') }}" class="mr-4"><i
                            class="mr-1 icon ion-md-arrow-back"></i></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            Name
                        </h5>
                        <span>{{ $uss_provider->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            Email
                        </h5>
                        <span>{{ $uss_provider->email ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            CNPJ
                        </h5>
                        <span>{{ $uss_provider->cnpj ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            #Drones
                        </h5>
                        <span>{{ $uss_provider->drones ?? '-' }}</span>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('uss-providers.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\UssProvider::class)
                        <a href="{{ route('uss-providers.edit', ['uss_provider' => $uss_provider]) }}" class="button">
                            <i class="mr-1 icon ion-md-add"></i>
                            @lang('crud.common.edit')
                        </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
