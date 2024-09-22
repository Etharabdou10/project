<!doctype html>
<html lang="en">

        @include('public.includes.headandnavindex')

        <section class="featured-section">
        @include('public.includes.indexSearch')   
        </section>

        <section class="explore-section section-padding" id="section_2">
        @include('public.includes.browseTopics')
        </section>

        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>
         @include('public.includes.howITworks')
        </section>

        <section class="faq-section section-padding" id="section_4">
        @include('public.includes.FAQS') 
        </section>

        <section class="section-padding" id="section_5">
        @include('public.includes.test')  
        </section>

        <section class="contact-section section-padding section-bg" id="section_6">
        @include('public.includes.contact')
        </section>
        </main>
        @include('public.includes.footer')

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/click-scroll.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>