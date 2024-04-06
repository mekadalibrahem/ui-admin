<x-uiadmin.app>
    <x-slot:title>
        Permissions
    </x-slot:title>

    <livewire:uiadmin.breadcrumb :path="['setting', 'Authorization', 'Permissions']" />
    <section class="bg-white container mx-auto md:w-5/5 lg:w-4/5   mt-8 rounded-lg  dark:bg-gray-900">
        <div class="w-full px-4 py-8 mx-auto ">

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="add-tab" data-tabs-target="#add"
                            type="button" role="tab" aria-controls="add" aria-selected="false">Add </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Edit</button>
                    </li>

                </ul>
            </div>
        </div>
        <div id="default-tab-content">
            <div class="hidden  rounded-lg bg-gray-50 dark:bg-gray-800" id="add" role="tabpanel"
                aria-labelledby="add-tab">
                <livewire:uiadmin.permission.add />

            </div>
            <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <livewire:uiadmin.permission.edit />
            </div>

        </div>

    </section>




    <livewire:uiadmin.permission.show />




</x-uiadmin.app>
