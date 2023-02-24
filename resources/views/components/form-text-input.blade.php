<div>
    <label for="text-input-{{$id}}" class="block mb-2 text-sm font-medium text-primary-dark dark:text-primary-light">
        {{$title}}
    </label>
    <div class="flex">
        <span class="inline-flex items-center px-3 text-sm text-primary-light bg-primary-700 border border-r-0 rounded-l-md dark:bg-primary-200 dark:text-primary-dark border-primary">
            {{$type == "email" ? "@" : "Aa"}}
        </span>
        <input
                type="{{$type}}"
                id="text-input-{{$id}}"
                name="{{$name}}"
                class="
                        rounded-none rounded-r-lg border block flex-1 min-w-0 w-full text-sm p-2.5
                        bg-primary-light
                        text-primary-dark
                        focus:border-primary
                "
                placeholder="{{$placeholder}}">
    </div>
    @error($name)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
        {{ __($message) }}
    </p>
    @enderror
</div>