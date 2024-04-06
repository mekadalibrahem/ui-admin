<!--- Add new Role section  --->
<section class="bg-white  mx-full  rounded-lg  dark:bg-gray-900">
    <div class="max-w-2xl px-4 py-8 mx-auto ">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit  permission</h2>
        @if ($status !== [])
            <x-uiadmin.alert :type="$status['type']" :message="$status['message']" />
        @endif
        <form wire:submit="update">
            @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-2">
                    <x-uiadmin.form.label for="old_name" value='old_name' />
                    <x-uiadmin.form.input type='text' wire:model='old_name' id="old_name" name='old_name' required />
                    @error('old_name')
                        <x-uiadmin.alert type="danger" :message="$message" />
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <x-uiadmin.form.label for="new_name" value='name' />
                    <x-uiadmin.form.input type='text' wire:model='new_name' id="new_name" name='new_name' required />
                    @error('new_name')
                        <x-uiadmin.alert type="danger" :message="$message" />
                    @enderror
                </div>

                <div class=" flex  items-center  space-x-4">
                    <x-uiadmin.button.primary type="submit" class="w-auto">
                        save
                    </x-uiadmin.button.primary>

                </div>
            </div>

        </form>
    </div>
</section>
