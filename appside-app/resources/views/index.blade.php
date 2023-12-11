<!DOCTYPE html>
<html lang="zxx">

  @include('components.head')

<body>
    <!-- navbar area -->
<x-navbar>
    <!-- header area -->
  @include ('main-areas.header')
    
</x-navbar>
<!-- about us area start -->
@include('main-areas.about-us')
<!-- about us area end -->

<!-- video area start -->
@include('main-areas.video')
<!-- video area end -->

<!-- counterup area start -->
@include('main-areas.counterup')
<!-- counterup area end -->

<!-- why choose area start -->
@include('main-areas.why-choose')
<!-- why choose area end -->

<!-- how it works area start -->
@include('main-areas.how-it-works')
<!-- how it works area end -->

<!-- screenshort area start -->
@include('main-areas.testimonial')
<!-- testimonial area end -->

<!-- price plan area start -->
@include('main-areas.price-plan')
<!-- price plan area end -->

<!-- team member area start -->
@include('main-areas.team-member')
<!-- team member area end -->

<!-- footer area -->
@include('components.footer')


<!-- preloader area start -->
@include('components.preloader-area')

  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->

  <!-- scripts -->
  @include('components.scripts')
</body>

</html>