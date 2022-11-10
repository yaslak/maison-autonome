<x-landing-layout>
    <x-landing.navbar/>
    <x-landing.display/>
    <x-landing.about_us/>
    <x-landing.product/>
    <x-landing.ballon/>
    <x-landing.argument/>
    <x-landing.contact/>
    <x-landing.footer/>
    <script>
        window.document.addEventListener('contactScroll', function (e){
            window.scrollTo(0, window.scrollY + document.querySelector('#contact-form').getBoundingClientRect().top);
            // alert('scroll')
        })
    </script>
</x-landing-layout>