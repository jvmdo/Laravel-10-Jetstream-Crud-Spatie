<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Provider
        </h2>
    </x-slot>

    @if (isset($uss_provider->token))
        <div class="pt-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-partials.card>
                    <div class="flex items-center p-4 text-sm rounded-lg bg-gray-100">
                        <div>
                            <span class="font-medium">Token:</span> {{ $uss_provider->token }}
                        </div>
                    </div>
                </x-partials.card>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <div class="block w-full overflow-auto scrolling-touch">
                    <table class="w-full max-w-full mb-4 bg-transparent">
                        <thead class="text-gray-700">
                            <tr>
                                <th class="px-4 py-3 text-left">
                                    Name
                                </th>
                                <th class="px-4 py-3 text-left">
                                    Email
                                </th>
                                <th class="px-4 py-3 text-left">
                                    CNPJ
                                </th>
                                <th class="px-4 py-3 text-left">
                                    #Drones
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @if (isset($uss_provider))
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-left">
                                        {{ $uss_provider->name ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-left">
                                        {{ $uss_provider->email ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-left">
                                        {{ $uss_provider->cnpj ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-left">
                                        {{ $uss_provider->drones ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-center" style="width: 134px;">
                                        <div role="group" aria-label="Row Actions"
                                            class="
                                            relative
                                            inline-flex
                                            align-middle
                                        ">
                                            @can('update', $uss_provider)
                                                <a href="{{ route('uss-providers.edit', $uss_provider) }}" class="mr-1">
                                                    <button type="button" class="button">
                                                        <i class="icon ion-md-create"></i>
                                                    </button>
                                                </a>
                                                @endcan @can('view', $uss_provider)
                                                <a href="{{ route('uss-providers.show', $uss_provider) }}" class="mr-1">
                                                    <button type="button" class="button">
                                                        <i class="icon ion-md-eye"></i>
                                                    </button>
                                                </a>
                                                @endcan @can('delete', $uss_provider)
                                                <form action="{{ route('uss-providers.destroy', $uss_provider) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="button">
                                                        <i
                                                            class="
                                                        icon
                                                        ion-md-trash
                                                        text-red-600
                                                    "></i>
                                                    </button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="3">
                                        You have not registered your provider yet
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="mb-5 mt-4">
                    <div class="flex flex-wrap justify-between">
                        <div class="md:w-1/2">
                        </div>
                        @if (!$userHasUssProvider)
                            <div class="md:w-1/2 text-right">
                                @can('create', App\Models\UssProvider::class)
                                    <a href="{{ route('uss-providers.create') }}" class="button button-primary">
                                        <i class="mr-1 icon ion-md-add"></i>
                                        Register
                                    </a>
                                @endcan
                            </div>
                        @else
                            @php
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
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3 text-{{ $color }}-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div>
                                    <span class="font-medium">Status:</span>
                                    {{ implode(' ', explode('_', $status_name)) }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
