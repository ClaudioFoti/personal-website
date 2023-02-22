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
    <hr class="my-2 border-primary-dark sm:mx-auto dark:border-primary-light" />
    <div class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
        
    </div>
</footer>