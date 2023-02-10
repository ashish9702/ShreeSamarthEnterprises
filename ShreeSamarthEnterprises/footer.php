<footer class="mt-5">
<div class="">

    <footer class="text-primary text-center text-lg-start bg-secondary">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4 justify-content-center">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase  mb-4">About company</h5>
  
          <p class="para-sm">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
            voluptatum deleniti atque corrupti.
          </p>
  
          <p class="para-sm">
            Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
            molestias.
          </p>
  
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-dribbble"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-left">
          <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2 para-sm">SAIKUNJ CHS A/302 PLOT NO 291/300, SEC-06 DARSHAN
                     DARBAR MARG NERUL W, DARSHAN DARBAR</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2 para-sm">shresmarthentreprises@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2 para-sm">+919819983768 (Siddesh Gole)</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2 para-sm">+919820824149 (Vijay Gole)</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>
  
          <table class="table text-center text-primary">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
<!-- End of .container -->

        </div>

        <!--Grid column-->

      </div>

      <!--Grid row-->

    </div>


  </footer>

  

</div>

<!-- End of .container -->

</footer>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src ="assets/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/79d898d5dd.js" crossorigin="anonymous"></script>
<script src="assets/owl-carousel/owl.carousel.min.js"></script>

<script>
     $(document).ready(function(){
        $('.owl-carousel-client').owlCarousel({
            margin: 15,
            loop: true,
            autoplay: true,
            center:true,
            responsiveClass: true,
    responsive:{
        0:{
            items:1,
             dots:true,
              nav: true,
        },
        600:{
            items:5,
             dots:true,
              nav: true,
        },
        1000:{
            items:5,
             dots:true,
              nav: true,
        },
        1500:{
            items:5,
             dots:true,
              nav: true,
        },
    }
    
});
$('.owl-carousel-review').owlCarousel({
            margin: 15,
            loop: true,
            autoplay: true,
            center:true,
            responsiveClass: true,
    responsive:{
        0:{
            items:1,
             dots:true,
              nav: true,
        },
        600:{
            items:2,
             dots:true,
              nav: true,
        },
        1000:{
            items:2,
             dots:true,
              nav: true,
        },
        1500:{
            items:2,
             dots:true,
              nav: true,
        },
    }

})
$('.owl-nav button').find('span').remove();
        $('.owl-prev').append('<i class="fa fa-angle-left"></i>');
        $('.owl-next').append('<i class="fa fa-angle-right"></i>');
});

</script>
</html>