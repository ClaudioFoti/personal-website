<x-section pos="left" title="{{__('About me')}}" id="about-me">
    <x-slot:link>
        <a
                class="
                    focus:outline-none focus:ring-4 text-primary-light bg-primary-700 dark:bg-primary-200
                    font-medium rounded-full text-sm px-5 py-2.5 text-center
                    hover:bg-primary focus:ring-primary dark:text-primary-dark
                "
                href="{{route('downloadCV')}}"
                target="_blank"
        >
            <svg class="w-5 h-5 inline mb-0.5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"></path>
                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"></path>
            </svg>
            <span class="hidden md:inline">
                {{__("My Curriculum Vitae")}}
            </span>
        </a>
    </x-slot:link>
    <x-slot:planet>
        <x-planet planetColor1="#fecf4e" planetColor2="#a62a44" planetColor3="#310441" ringColor="rgba(248, 197, 77, 0.8)" ringOuterColor="#d3bc68"/>
    </x-slot:planet>
    <p class="mb-4">
        {{__("My name is Claudio Foti and I am a Full-Stack and Software Developer.")}}
        {{__("I come from Switzerland and I am currently studying in Barcelona to complete my Bachelor's degree in Cyber Security at ")}}
        <a href="https://harbour.space/" target="_blank" class="text-primary dark:hover:text-primary-200 hover:text-primary-700">
            {{__("Harbour.Space University")}}
        </a>.
    </p>
    <p class="text-xl font-medium mb-2">{{__("Some of my best technical skills")}}</p>
    <div class="gap-8 sm:grid sm:grid-cols-2">
        <div>
            <x-skill-bar :amount="80" title="Java"/>
            <x-skill-bar :amount="80" title="JavaScript"/>
            <x-skill-bar :amount="80" title="MySQL"/>
            <x-skill-bar :amount="85" title="Python"/>
        </div>
        <div>
            <x-skill-bar :amount="95" title="Git"/>
            <x-skill-bar :amount="95" title="Laravel"/>
            <x-skill-bar :amount="100" title="HTML/CSS"/>
            <x-skill-bar :amount="100" title="PHP"/>
        </div>
    </div>
    <div class="flex mt-2 space-x-4 sm:justify-center">
        <a href="https://github.com/ClaudioFoti" target="_blank" class="text-primary dark:hover:text-primary-200 hover:text-primary-700 align-middle">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
            <span class="sr-only">{{__('GitHub account')}}</span>
        </a>
        <a href="https://www.linkedin.com/in/claudiofoti/" target="_blank" class="text-primary dark:hover:text-primary-200 hover:text-primary-700 align-middle">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            <span class="sr-only">{{__('LinkedIn account')}}</span>
        </a>
    </div>

</x-section>
