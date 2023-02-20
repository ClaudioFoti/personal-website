<nav class="border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{route('welcome')}}" class="flex items-center">
            <span class="self-center text-3xl md:text-4xl font-semibold whitespace-nowrap text-primary-dark dark:text-primary-light app-title">{{config("app.name")}}</span>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center justify-center px-4 py-2 text-sm text-primary-dark dark:text-primary-light rounded-lg cursor-pointer hover:text-primary dark:hover:text-primary">
                {!! $active_language['image'] !!}
            </button>
            <div class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 rounded-lg" id="language-dropdown-menu">
                <ul class="py-2" role="none">
                    @foreach($languages as $locale => $language)
                        <li>
                            <a href="{{route('setLocale',['locale' => $locale])}}" class="block text-sm text-primary-dark dark:text-primary-light hover:text-primary-light dark:hover:text-primary-dark" role="menuitem">
                                <div class="inline-flex items-center">
                                    <button data-tooltip-target="tooltip-right-{{$locale}}" data-tooltip-placement="right" type="button" class="mb-2 md:mb-0 font-medium rounded-lg text-sm py-2.5 text-center">
                                        {!! $language['image'] !!}
                                    </button>
                                    <div id="tooltip-right-{{$locale}}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        {{ $language['title'] }}
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>
