<div class="mb-4">
    <div class="absolute w-3 h-3 bg-primary-700 rounded-full mt-1.5 -left-1.5 dark:bg-primary-200"></div>
    <time class="mb-1 text-sm font-normal leading-none text-primary-700 dark:text-primary-200">
        <span class="inline">
            {{__($startDate->format("F Y"))}} - {{$endDate == "Now" ? __($endDate) : __($endDate->format("F Y"))}}
        </span>
        @if($location != "")
        <svg class="w-5 h-5 inline mb-1 self-center text-primary" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"></path>
        </svg>
        <a class="inline text-sm font-semibold text-primary dark:hover:text-primary-200 hover:text-primary-700" href="https://www.google.com/maps/place/{{$location}}" target="_blank">
            <span class="inline">{{$location}}</span>
        </a>
        @endif
    </time>
    <div>
        <p class="text-2xl font-bold inline">
            {{$place}}
        </p>
        <div class="inline-flex">
            @if($link != "")
            <a class="text-primary dark:hover:text-primary-200 hover:text-primary-700" href="{{$link}}" target="_blank">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 01.75.75v5.25a.75.75 0 01-1.5 0V4.81L8.03 17.03a.75.75 0 01-1.06-1.06L19.19 3.75h-3.44a.75.75 0 010-1.5zm-10.5 4.5a1.5 1.5 0 00-1.5 1.5v10.5a1.5 1.5 0 001.5 1.5h10.5a1.5 1.5 0 001.5-1.5V10.5a.75.75 0 011.5 0v8.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V8.25a3 3 0 013-3h8.25a.75.75 0 010 1.5H5.25z"></path>
                </svg>
            </a>
            @endif
        </div>
    </div>

    <div class="text-sm font-semibold block">
        {{$position}}
    </div>
    <div class="mt-4">
        <p class="font-light">{{$description}}</p>
    </div>
</div>
