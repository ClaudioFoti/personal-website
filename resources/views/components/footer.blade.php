<footer class="p-4 md:px-6 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <x-logo/>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
            @foreach($menu as $element)
            <li>
                <a href="#{{$element['url']}}" class="mr-4 hover:underline md:mr-6 text-primary dark:hover:text-primary-200 hover:text-primary-700">{{__($element['title'])}}</a>
            </li>
            @endforeach
            <li>
                <button class="mr-4 hover:underline md:mr-6 text-primary dark:hover:text-primary-200 hover:text-primary-700" data-modal-target="contact-modal" data-modal-toggle="contact-modal" type="button">
                    {{__('Contact me')}}
                </button>
            </li>
        </ul>
    </div>
    <hr class="my-4 border-primary-dark sm:mx-auto dark:border-primary-light" />
    <div class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
        <div class="flex mt-4 space-x-4 sm:justify-center sm:mt-0">
            <a href="mailto:clau.foti@gmail.com" class="text-primary dark:hover:text-primary-200 hover:text-primary-700 align-middle">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"></path>
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"></path>
                </svg>
                <span class="sr-only">{{__('Email address')}}</span>
            </a>
            <a href="tel:+41791920708" class="text-primary dark:hover:text-primary-200 hover:text-primary-700 align-middle">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                          d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"></path>
                </svg>
                <span class="sr-only">{{__('Phone number')}}</span>
            </a>
            <a href="https://github.com/ClaudioFoti" target="_blank" class="text-primary dark:hover:text-primary-200 hover:text-primary-700 align-middle">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                <span class="sr-only">{{__('GitHub account')}}</span>
            </a>
            <a href="https://www.linkedin.com/in/claudiofoti/" target="_blank" class="text-primary dark:hover:text-primary-200 hover:text-primary-700 align-middle">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                <span class="sr-only">{{__('LinkedIn account')}}</span>
            </a>
        </div>
    </div>
</footer>