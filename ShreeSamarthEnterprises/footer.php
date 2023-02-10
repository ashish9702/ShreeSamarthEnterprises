<footer class="mt-5">

</footer>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src ="assets/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/79d898d5dd.js" crossorigin="anonymous"></script>
<script src="assets/owl-carousel/owl.carousel.min.js"></script>

<script>
     $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
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
})
$('.owl-nav button').find('span').remove();
        $('.owl-prev').append('<i class="fa fa-angle-left"></i>');
        $('.owl-next').append('<i class="fa fa-angle-right"></i>');
});

</script>
</html>