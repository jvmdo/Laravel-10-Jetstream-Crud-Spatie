<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Provider
        </h2>
    </x-slot>

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
                            @forelse($uss_providers as $uss_provider)
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
                            @empty
                                <tr>
                                    <td colspan="3">
                                        You have not registered your provider yet
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <div class="mt-10 px-4">
                                        {!! $uss_providers->render() !!}
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="mb-5 mt-4">
                    <div class="flex flex-wrap justify-between">
                        <div class="md:w-1/2">
                        </div>
                        <div class="md:w-1/2 text-right">
                            @can('create', App\Models\UssProvider::class)
                                <a href="{{ route('uss-providers.create') }}" class="button button-primary">
                                    <i class="mr-1 icon ion-md-add"></i>
                                    Register
                                </a>
                            @endcan
                        </div>
                    </div>
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
