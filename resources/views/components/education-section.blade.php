<x-section pos="right" title="{{__('Education')}}" id="education">
    <x-slot:planet>
        <x-planet planetColor1="#7F8B52" planetColor2="#A3A847" planetColor3="#558776" ringColor="rgb(234, 226, 182, 0.8)" ringOuterColor="#EAE2B6"/>
    </x-slot:planet>

    <ol class="relative border-l border-primary-700 dark:border-primary-200">
        <li class="mb-10 ml-4">
            <x-education-element
                :place="__('Mandatory Schools')"
                :diploma="__('Cycle d\'Orientation Diploma')"
                link="https://www.comonthey.ch/"
                :startDate="\Carbon\Carbon::create(2005,8)"
                :endDate="\Carbon\Carbon::create(2016,6)"
                location="{{__('Monthey,Switzerland')}}"
                :description="__('I finished my mandatory schools by being class valedictorian.')"
            />
        </li>
        <li class="mb-10 ml-4">
            <x-education-element
                place="École Professionnelle Technique des Métiers"
                :diploma="__('CFC in Computer Science, Maturité Professionnelle Technique')"
                link="https://eptm.ch/"
                :startDate="\Carbon\Carbon::create(2016,8)"
                :endDate="\Carbon\Carbon::create(2020,6)"
                location="{{__('Sion,Switzerland')}}"
                :description="__('Apprenticeship giving a Federal Capacity Certificate (CFC) of Computer Scientist with an integrated Vocational Baccalaureate (Maturité Professionnelle Technique).')"
            />
        </li>
        <li class="mb-10 ml-4">
            <x-education-element
                place="Harbour.Space"
                :diploma="__('Bachelor\'s degree in Cyber Security')"
                link="https://harbour.space/"
                :startDate="\Carbon\Carbon::create(2021,9)"
                :endDate="\Carbon\Carbon::create(2024,8)"
                location="{{__('Barcelona,Spain')}}"
                :description="__('I am currently completing my Bachelor\'s degree in Cyber Security')"
            />
        </li>
    </ol>



</x-section>
