<div>
    <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center justify-center px-4 py-2 rounded-lg cursor-pointer">
        {!! $active_language['image'] !!}
    </button>
    <div class="z-50 hidden my-4 text-base list-none divide-y rounded-lg" id="language-dropdown-menu">
    <ul role="none">
        @foreach($languages as $locale => $language)
            <li>
                <a href="{{route('setLocale',['locale' => $locale])}}" class="block" role="menuitem">
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