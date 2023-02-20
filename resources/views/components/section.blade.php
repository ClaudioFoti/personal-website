<div id="{{$id}}" class="min-h-[100vh] flex pr-8">
    <div class="self-center">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
            @if($pos == "left")
            <div class="hidden md:flex justify-center items-center z-0">
                {{$planet}}
            </div>
            @endif
            <div class="col-span-2 z-10 text-primary-dark dark:text-primary-light px-4">
                <p class="text-4xl font-bold mb-2">{{$title}}</p>
                <div class="mb-3 text-lg font-light">
                    {{$slot}}
                </div>
            </div>
            @if($pos == "right")
            <div class="hidden md:flex justify-end items-center z-0">
                {{$planet}}
            </div>
            @endif
        </div>
    </div>
</div>
