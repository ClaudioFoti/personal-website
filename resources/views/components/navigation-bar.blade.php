<nav class="border-gray-200 fixed w-full z-20 top-0 left-0 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{route('welcome')}}" class="flex items-center">
            <span class="self-center text-3xl md:text-4xl font-semibold whitespace-nowrap text-primary-dark dark:text-primary-light app-title">{{config("app.name")}}</span>
        </a>
        <div class="flex items-center md:order-2">
            <div class="flex">
                <a href="mailto:clau.foti@gmail.com" class="mr-6 text-sm font-medium text-primary dark:hover:text-primary-200 hover:text-primary-700">
                    <svg class="inline w-5 h-5 mb-0.5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"></path>
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"></path>
                    </svg>
                    <span class="inline hover:underline">
                        clau.foti@gmail.com
                    </span>
                </a>
                <a href="tel:+41791920708" class="mr-6 text-sm font-medium text-primary dark:hover:text-primary-200 hover:text-primary-700">
                    <svg class="inline w-5 h-5 mb-0.5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"></path>
                    </svg>
                    <span class="inline hover:underline">
                        +41 79 192 07 08
                    </span>
                </a>
            </div>
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
