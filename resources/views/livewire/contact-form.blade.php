<form class="space-y-6" action="#">
    <x-form-text-input id="email" type="email" :title="__('Your email')" :placeholder="__('Your email')" />
    <x-form-text-input id="subject" type="text" :title="__('Subject')" :placeholder="__('Subject of your request')" />
    <x-form-text-area id="message" :title="__('Your message')" :placeholder="__('Leave your message here')" />

    <button
            type="submit"
            class="
                    w-full text-primary-light bg-primary-700 dark:bg-primary-200 focus:ring-4 focus:outline-none
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-primary
                    focus:ring-primary dark:text-primary-dark
            ">
        <span class="inline">
            {{__("Send")}}
        </span>
        <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
            <path d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z"></path>
        </svg>
    </button>
</form>