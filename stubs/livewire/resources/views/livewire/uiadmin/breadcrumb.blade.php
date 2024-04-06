<div>
    @if ($filtered_items != [])

    <!-- Breadcrumb -->
    <nav class="flex justify-between" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 sm:mb-0">
            @foreach ($filtered_items as $item)

                @if ($loop->first)
                    <li>
                        <div class="flex items-center">
                            <button id="dropdownProject" data-dropdown-toggle="{{$item['name']}}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">

                                {{ $item['name'] }}
                                @if ($item['links'] != [])
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                @endif

                            </button>

                            @if ($item['links'] != [])
                                @foreach ($item['links'] as $link)

                                @endforeach
                            @endif

                        </div>
                @elseif ($loop->last)
                    <li>

                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <button id="dropdownProject" data-dropdown-toggle="{{$item['name']}}"
                                class="flex items-center ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                {{ $item['name'] }}
                                @if ($item['links'] != [])
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                @endif
                            </button>


                            @if ($item['links'] != [])
                                @foreach ($item['links'] as $link)

                                @endforeach
                            @endif




                        </div>
                    </li>
                @else
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <div class=" flex items-center">
                                <button id="dropdownProject" data-dropdown-toggle="{{$item['name']}}"
                                    class="flex items-center ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                                    {{ $item['name'] }}
                                    @if ($item['links'] != [])
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    @endif

                                </button>
                                @if ($item['links'] != [])
                                <div id="{{$item['name']}}"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                    @foreach ($item['links'] as $link)

                                        <li>
                                            <a href="{{ route($link['route']) }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                {{ $link['name'] }}
                                            </a>
                                        </li>


                                    @endforeach
                                </ul>
                            </div>
                                @endif


                            </div>

                        </div>

                    </li>
                @endif

            @endforeach

        </ol>
    </nav>




@endif
</div>


