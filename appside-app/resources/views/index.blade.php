<!DOCTYPE html>
<html lang="zxx">

  @include('layouts.head')

<body>
    <!-- navbar area -->
@include('layouts.navbar')
    <!-- header area -->
@include ('layouts.header')
    

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
@include('layouts.footer')


<!-- preloader area start -->
@include('layouts.preloader-area')

  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->

  <!-- scripts -->
  @include('layouts.scripts')
</body>

</html>