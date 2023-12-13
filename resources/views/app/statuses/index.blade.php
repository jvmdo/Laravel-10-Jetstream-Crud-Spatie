@php
    use App\Enums\StatusEnum;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            USS Providers List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <div class="mb-5 mt-4">
                    <div class="flex flex-wrap justify-between">
                        <div class="md:w-1/2">
                            <form>
                                <div class="flex items-center w-full">
                                    {{-- TODO: fix search by name and empty field bug --}}
                                    <x-inputs.text name="search" value="{{ $search ?? '' }}"
                                        placeholder="{{ __('crud.common.search') }}" autocomplete="off"></x-inputs.text>

                                    <div class="ml-1">
                                        <button type="submit" class="button button-primary">
                                            <i class="icon ion-md-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="md:w-1/2 text-right">
                            {{-- @can('create', App\Models\Status::class)
                                <a href="{{ route('statuses.create') }}" class="button button-primary">
                                    <i class="mr-1 icon ion-md-add"></i>
                                    @lang('crud.common.create')
                                </a>
                            @endcan --}}
                        </div>
                    </div>
                </div>

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
                                <th class="px-4 py-3 text-left">
                                    Status
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @forelse($statusesWithProvider as $status)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-left">
                                        {{ $status->ussProvider->name ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-left">
                                        {{ $status->ussProvider->email ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-left">
                                        {{ $status->ussProvider->cnpj ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-left">
                                        {{ $status->ussProvider->drones ?? '-' }}
                                    </td>
                                    @php
                                        $status_name = implode(' ', explode('_', $status->status));
                                        $statusColors = [
                                            'EM ANALISE' => 'yellow',
                                            'APROVADO' => 'green',
                                            'REPROVADO' => 'red',
                                        ];
                                    @endphp
                                    <td
                                        class="px-4 py-3 text-left text-{{ $statusColors[$status_name] }}-500 font-bold">
                                        {{ $status_name ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-center" style="width: 134px;">
                                        <div role="group" aria-label="Row Actions"
                                            class="
                                            relative
                                            inline-flex
                                            align-middle
                                        ">
                                            @can('update', $status)
                                                <a href="{{ route('statuses.edit', $status) }}" class="mr-1">
                                                    <button type="button" class="button">
                                                        <i class="icon ion-md-eye"></i>
                                                    </button>
                                                </a>
                                            @endcan
                                            @can('update', $status)
                                                <x-dropdown align="right" width="60">
                                                    <x-slot name="trigger">
                                                        <span class="inline-flex rounded-md">
                                                            <button type="button" class="button">
                                                                <i class="icon ion-md-clipboard"></i>
                                                            </button>
                                                        </span>
                                                    </x-slot>

                                                    <x-slot name="content">
                                                        <div class="w-60">
                                                            <!-- Team Management -->
                                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                                {{ __('Update Status') }}
                                                            </div>

                                                            <!-- Team Settings -->
                                                            <x-dropdown-link href="{{ url('/') }}">
                                                                {{ __('Team Settings') }}
                                                            </x-dropdown-link>


                                                            <x-dropdown-link href="{{ url('/') }}">
                                                                {{ __('Create New Team') }}
                                                            </x-dropdown-link>
                                                        </div>
                                                    </x-slot>
                                                </x-dropdown>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        @lang('crud.common.no_items_found')
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <div class="mt-10 px-4">
                                        {!! $statusesWithProvider->render() !!}
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
