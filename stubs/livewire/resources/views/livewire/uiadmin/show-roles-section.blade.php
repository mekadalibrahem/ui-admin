<!--- show  Roles section  --->
<section class="bg-white container mx-auto md:w-5/5 lg:w-4/5   mt-8 rounded-lg  dark:bg-gray-900">
    <div class="w-full px-4 py-8 mx-auto ">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Roles : </h2>
        @if ($status !== [])
            <x-uiadmin.alert :type="$status['type']" :message="$status['message']" />
        @endif


        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <!--- search --->
            <x-uiadmin.search wire="wire:model.live=input_search" />


        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-center">
                        <th scope="col" class="px-4 py-3">#</th>
                        <th scope="col" class="px-4 py-3">name</th>
                        <th scope="col" class="px-4 py-3">options</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr class="border-b dark:border-gray-700" wire:key="{{ $role->id }}">
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $role->id }}
                            </th>
                            <td class="px-4 py-3"> {{ $role->name }} </td>
                            <td class="px-4 py-3 flex flex-row md:justify-center gap-2">
                                <x-uiadmin.button.primary wire:click="index({{$role->id}})" type="button" class="w-min">
                                    <x-uiadmin.svg.arrow-up />
                                </x-uiadmin.button.primary>
                                <x-uiadmin.button.danger type="button" wire:click="delete({{ $role->id }})"
                                    wire:confirm="are your sure delete this role" class="w-min">
                                    <x-uiadmin.svg.trash />


                                </x-uiadmin.button.danger>

                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>



        {{ $roles->links('components.uiadmin.pagination') }}

    </div>
</section>
