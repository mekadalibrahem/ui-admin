<ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">

    <x-uiadmin.link  :active="(Route::currentRouteName() == 'admin.dashboard') ?? true" href="{{Route('admin.dashboard')}}"> Dashboard </x-uiadmin.link>

    @if (Route::has('profile.create'))
        <x-uiadmin.link  :active="(Route::currentRouteName() == 'profile.create') ?? true" href="{{ Route('profile.create') }}" >
            Profile
        </x-uiadmin.link>
    @else
        <x-uiadmin.link  :active="(Route::currentRouteName() == 'profile.create') ?? true" href="#" >
            Profile
        </x-uiadmin.link>
    @endif


</ul>
