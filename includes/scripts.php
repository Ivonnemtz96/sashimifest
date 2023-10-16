<div id="gotoTop" class="uil uil-angle-up"></div>

<script src="/js/plugins.min.js"></script>
<script src="/js/functions.bundle.js"></script>

<script src="/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>

<script>
  jQuery(document).ready(function() {

      function openFancybox() {
          setTimeout(function() {
              jQuery('#popuplink').trigger('click');
          }, 500);
      };

      var visited = jQuery.cookie('visited');
      if (visited == 'yes') {
          // second page load, cookie active
      } else {
          openFancybox(); // first page load, launch fancybox
      }
      jQuery.cookie('visited', 'yes', {
          expires: 1 // the number of days cookie  will be effective
      });
      jQuery("#popuplink").fancybox({
          modal: true,
          maxWidth: 1000,
          overlay: {
              closeClick: true
          }
      });
  });
  </script>

  <script>
  // Revolution Slider Scripts
  var tpj = jQuery;

  tpj(document).ready(function() {
      var apiRevoSlider = tpj("#rev_slider_op-fc")
          .show()
          .revolution({
              sliderType: "standard",
              jsFileLocation: "/include/rs-plugin/js/",
              sliderLayout: "fullscreen",
              dottedOverlay: "none",
              delay: 16000,
              responsiveLevels: [1140, 992, 768, 480],
              visibilityLevels: [1140, 992, 768, 480],
              gridwidth: [1140, 992, 768, 480],
              gridheight: [700, 768, 960, 720],
              hideThumbs: 200,

              thumbWidth: 100,
              thumbHeight: 50,
              thumbAmount: 5,

              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false,
                  },
                  arrows: {
                      style: "hermes",
                      enable: true,
                      hide_onmobile: false,
                      hide_onleave: false,
                      tmp: '<div class="tp-arr-allwrapper">   <div class="tp-arr-imgholder"></div>    <div class="tp-arr-titleholder">{{title}}</div> </div>',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 10,
                          v_offset: 0,
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 10,
                          v_offset: 0,
                      },
                  },
              },

              touchenabled: "on",
              onHoverStop: "on",

              swipe_velocity: 0.7,
              swipe_min_touches: 1,
              swipe_max_touches: 1,
              drag_block_vertical: false,

              keyboardNavigation: "off",

              shadow: 0,
              fullWidth: "off",
              fullScreen: "on",

              spinner: "spinner4",

              stopLoop: "off",
              stopAfterLoops: -1,
              stopAtSlide: -1,

              shuffle: "off",

              autoHeight: "off",
              forceFullWidth: "off",

              hideThumbsOnMobile: "off",
              hideNavDelayOnMobile: 1500,
              hideBulletsOnMobile: "off",
              hideArrowsOnMobile: "off",
              hideThumbsUnderResolution: 0,

              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              startWithSlide: 0,
          });

      apiRevoSlider.on("revolution.slide.onchange", function(e, data) {
          SEMICOLON.Base.sliderMenuClass();
      });
  }); //ready
</script>

<script>
(function() {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "03/16/",
        birthday = dayMonth + yyyy;

    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
        birthday = dayMonth + nextYear;
    }
    //end

    const countDown = new Date(birthday).getTime(),
        x = setInterval(function() {

            const now = new Date().getTime(),
                distance = countDown - now;

            document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {
                document.getElementById("headline").innerText = "Sashimi Fest Day!";
                document.getElementById("countdown").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
            }
            //seconds
        }, 0)
}());
</script>


<script>
(function() {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "03/16/",
        birthday = dayMonth + yyyy;

    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
        birthday = dayMonth + nextYear;
    }
    //end

    const countDown2 = new Date(birthday).getTime(),
        x = setInterval(function() {

            const now = new Date().getTime(),
                distance = countDown2 - now;

            document.getElementById("days2").innerText = Math.floor(distance / (day)),
                document.getElementById("hours2").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes2").innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById("seconds2").innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {
                document.getElementById("headline").innerText = "Sashimi Fest Day!";
                document.getElementById("countdown2").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
            }
            //seconds
        }, 0)
}());
</script>