<tr class="border-b dark:border-gray-700">
    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{-- {{ $key }} --}}1
    </th>
    <td class="px-4 py-3"> {{ $role->name }} </td>
    <td class="px-4 py-3 flex flex-row md:justify-around">
        <x-uiadmin.button.primary wire:click="" type="button" class="md:w-1/4 min-w-auto">
            show
        </x-uiadmin.button.primary>
        <x-uiadmin.button.danger type="button" wire:click="delete" wire:confirm="are your sure delete this role"
            class="md:w-1/4 min-w-auto">
            delete

        </x-uiadmin.button.danger>

    </td>
</tr>
