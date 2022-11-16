<x-landing-layout>
    <header>
        <x-landing.navbar/>
        <x-landing.display/>
    </header>
    <x-landing.about_us/>
    <x-landing.product/>
    <x-landing.argument/>
    <x-landing.contact/>
    <x-landing.footer/>
    <script>
        window.document.addEventListener('contactScroll', function (e){
            window.scrollTo(0, window.scrollY + document.querySelector('#contact').getBoundingClientRect().top);
        })
    </script>
</x-landing-layout>