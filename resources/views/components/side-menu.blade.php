@vite('resources/css/side-menu.css')
<nav id="dot" class="z-50">
    <ul>
        @foreach($menu as $element)
            <li class="{{$element["url"]}}">
                <a href="#{{$element["url"]}}" data-tooltip-target="tooltip-left-{{$element["title"]}}" data-tooltip-placement="left" type="button"></a>
                <div id="tooltip-left-{{$element["title"]}}" role="tooltip" class="absolute invisible z-10 inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm tooltip dark:bg-gray-700">
                    <span class="block">{{__($element["title"])}}</span>
                </div>
            </li>
        @endforeach
    </ul>
</nav>
