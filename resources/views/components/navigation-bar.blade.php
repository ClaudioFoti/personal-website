<nav class="border-gray-200 fixed w-full z-20 top-0 left-0 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <x-logo/>

        <div class="flex items-center md:order-2">
            <div class="flex">
                <a href="mailto:clau.foti@gmail.com"
                   class="mr-6 text-sm font-medium text-primary dark:hover:text-primary-200 hover:text-primary-700 self-center">
                    <svg class="inline w-5 h-5 mb-0.5" fill="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"></path>
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"></path>
                    </svg>
                    <span class="hover:underline hidden md:inline">
                    clau.foti@gmail.com
                </span>
                </a>
                <a href="tel:+41791920708"
                   class="mr-6 text-sm font-medium text-primary dark:hover:text-primary-200 hover:text-primary-700 self-center">
                    <svg class="inline w-5 h-5 mb-0.5" fill="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                              d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"></path>
                    </svg>
                    <span class="hover:underline hidden md:inline">
                    +41 79 192 07 08
                </span>
                </a>
            </div>
            <x-language-dropdown/>
        </div>
    </div>
</nav>
