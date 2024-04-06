<x-uiadmin.app>
    <x-slot:title>
        Roles
    </x-slot:title>

    <livewire:uiadmin.breadcrumb :path="['setting' , 'Authorization' , 'Roles']" />

    <livewire:uiadmin.add-role-section />

    <livewire:uiadmin.show-roles-section />


    <livewire:uiadmin.role-card />

</x-uiadmin.app>
