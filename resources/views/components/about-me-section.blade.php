<x-section pos="left" title="{{__('About Me')}}" id="about-me">
    <x-slot:planet>
        <x-planet planetColor1="#fecf4e" planetColor2="#a62a44" planetColor3="#310441" ringColor="rgba(248, 197, 77, 0.8)" ringOuterColor="#d3bc68"/>
    </x-slot:planet>
    <p>
        {{__("My name is Claudio Foti and I am a Full-Stack and Software Developer.")}}
        {{__("I come from Switzerland and I am currently studying in Barcelona to complete my Bachelor's degree in Cyber Security at ")}}
        <a href="https://harbour.space/" target="_blank" class="text-primary dark:hover:text-primary-200 hover:text-primary-700">
            {{__("Harbour.Space University")}}
        </a>.
    </p>
</x-section>
