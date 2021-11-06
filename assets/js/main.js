 /*------------crousel-media-gallery--------------*/

$(function() {

	if ( $('.owl-2').length > 0 ) {
        $('.owl-2').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: true,
            nav: true,
            dots: true,
            pauseOnHover: false,
            responsive:{
                600:{
                    margin: 20,
                    nav: true,
                  items: 2
                },
                1000:{
                    margin: 20,
                    stagePadding: 0,
                    nav: true,
                  items: 3
                }
            }
        });            
    }

})
$(function() {

	if ( $('.owl-4').length > 0 ) {
        $('.owl-4').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: true,
            nav: true,
            dots: true,
            pauseOnHover: false,
            responsive:{
                600:{
                    margin: 20,
                    nav: true,
                  items: 1
                },
                1000:{
                    margin: 20,
                    stagePadding: 0,
                    nav: true,
                  items: 1
                }
            }
        });            
    }

})
 /*------------crousel-Webinars--------------*/
$(function() {

    if ( $('.owl-3').length > 0 ) {
        $('.owl-3').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: true,
            nav: true,
            dots: true,
            pauseOnHover: false,
            responsive:{
                600:{
                    margin: 20,
                    nav: true,
                  items: 2
                },
                1000:{
                    margin: 20,
                    stagePadding: 0,
                    nav: true,
                  items: 2
                }
            }
        });            
    }

})
 /*------------message-section--------------*/

            var points = 
                document.getElementById("points");
  
            var showMoreText =
                document.getElementById("moreText");
  
            var buttonText =
                document.getElementById("textButton");

                points.style.display = "inline-block";
  
                 showMoreText.style.display = "none";

        function toggleText() {
  

            if (points.style.display === "none") {
  
                showMoreText.style.display = "none";
  
                points.style.display = "inline";
  
                buttonText.innerHTML = "Show More";
            }
  
            else {
  
                showMoreText.style.display = "inline";
  
                points.style.display = "none";
  
                buttonText.innerHTML = "Show Less";
            }
        }

       