<x-section pos="left" title="{{__('Experience')}}" id="experience">
    <x-slot:planet>
        <x-planet planetColor1="#AE00FB" planetColor2="#3E00FF" planetColor3="#170055" ringColor="rgb(185, 28, 255, 0.8)" ringOuterColor="#b91cff"/>
    </x-slot:planet>
    <ol class="relative border-l border-primary-700 dark:border-primary-200">
        <li class="mb-10 ml-4">
            <x-career-element
                place="Caisse de Compensation du Canton du Valais"
                :position="__('Software/Web developer')"
                link="https://www.vs.ch/web/avs"
                :startDate="\Carbon\Carbon::create(2019,8)"
                :endDate="\Carbon\Carbon::create(2020,7)"
                :location="__('Sion,Switzerland')"
                :description="__('In the last year of my apprenticeship, I had the chance to do a one-year internship at the Caisse de compensation du Valais as a software and web(full-stack) developer.')"
            />
        </li>
        <li class="mb-10 ml-4">
            <x-career-element
                place="DayOneFactory"
                :position="__('Full Stack Web Developer')"
                link="https://www.dayonefactory.ch/"
                :startDate="\Carbon\Carbon::create(2021,7)"
                :endDate="\Carbon\Carbon::create(2021,8)"
                :location="__('Sion,Switzerland')"
                :description="__('I joined a team of web developers for a month and a half as a summer job and helped them in various projects. I notably worked on a website in React (front-end) and Drupal (back-end) thanks to which I could learn these tools.')"
            />
        </li>
        <li class="ml-4">
            <x-career-element
                place="Freelancer"
                position=""
                link=""
                :startDate="\Carbon\Carbon::create(2020,8)"
                endDate="Now"
                location=""
                :description="__('I have worked for several individuals and companies as a freelancer. During these mandates, I created showcase websites (HTML5 + CSS3 + jQuery) or Wordpress websites. I also created internal tools for real estate portals in PHP or scripting languages.')"
            />
        </li>
    </ol>
</x-section>
