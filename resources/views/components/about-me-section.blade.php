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

</x-section>
