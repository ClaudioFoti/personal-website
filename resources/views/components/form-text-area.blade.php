<div>
    <label for="text-area-{{$id}}" class="block mb-2 text-sm font-medium text-primary-dark dark:text-primary-light">
        {{$title}}
    </label>
    <textarea
            id="text-area-{{$id}}"
            rows="4"
            class="
                    rounded-lg border block flex-1 min-w-0 w-full text-sm p-2.5
                    bg-primary-light
                    text-primary-dark
                    focus:border-primary
            "
            placeholder="{{$placeholder}}"></textarea>
</div>