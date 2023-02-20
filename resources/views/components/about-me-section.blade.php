<x-section pos="left" title="{{__('About Me')}}" id="about-me">
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
