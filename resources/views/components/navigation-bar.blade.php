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
                <button
                        type="button"
                        class="
                                focus:outline-none focus:ring-4 text-primary-light bg-primary-700 dark:bg-primary-200
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2
                                hover:bg-primary focus:ring-primary dark:text-primary-dark
                        "
                        data-modal-target="contact-modal" data-modal-toggle="contact-modal"
                >
                    <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                        <path d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z"></path>
                    </svg>
                    <span class="hidden md:inline">
                        {{__("Contact me")}}
                    </span>
                </button>
            </div>
            <x-language-dropdown/>
        </div>
    </div>
</nav>
