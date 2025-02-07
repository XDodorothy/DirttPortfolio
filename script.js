$(document).ready(function () {
  // typing animation
  (function ($) {
    $.fn.writeText = function (content) {
      var contentArray = content.split(""),
        current = 0,
        elem = this;
      setInterval(function () {
        if (current < contentArray.length) {
          elem.text(elem.text() + contentArray[current++]);
        }
      }, 80);
    };
  })(jQuery);

  // input text for typing animation Accueil
  $("#holder").writeText("DÉVELOPPEUSE WEB + PROGRAMMEUSE");
  // input text for typing animation About
  $("#holder2").writeText("DOROTHÉE, définition:");
    // input text for typing animation Reralisation
    $("#holder3").writeText("Mes réalisations");

  // initialize wow.js
  new WOW().init();

  // Push the body and the nav over by 285px over
  var main = function () {
    $(".fa-bars").click(function () {
      $(".nav-screen").animate(
        {
          right: "0px"
        },
        200
      );

      $("body").animate(
        {
          right: "285px"
        },
        200
      );
    });

    // Then push them back */
    $(".fa-times").click(function () {
      $(".nav-screen").animate(
        {
          right: "-285px"
        },
        200
      );

      $("body").animate(
        {
          right: "0px"
        },
        200
      );
    });

    $(".nav-links a").click(function () {
      $(".nav-screen").animate(
        {
          right: "-285px"
        },
        500
      );

      $("body").animate(
        {
          right: "0px"
        },
        500
      );
    });
  };

  $(document).ready(main);

  // initiate full page scroll

  $("#fullpage").fullpage({
    scrollBar: true,
    responsiveWidth: 400,
    navigation: true,
    navigationTooltips: ["accueil", "à propos", "portfolio"],
    anchors: ["accueil", "apropos", "portfolio"],
    menu: "#myMenu",
    fitToSection: false,

    afterLoad: function (anchorLink, index) {
      var loadedSection = $(this);

      //using index
      if (index == 1) {
        /* add opacity to arrow */
        $(".fa-chevron-down").each(function () {
          $(this).css("opacity", "1");
        });
        $(".header-links a").each(function () {
          $(this).css("color", "white");
        });
        $(".header-links").css("background-color", "transparent");
      } else if (index != 1) {
        $(".header-links a").each(function () {
          $(this).css("color", "black");
        });
        $(".header-links").css("background-color", "white");
      }

      //using index
      if (index == 2) {
        /* animate skill bars */
        $(".skillbar").each(function () {
          $(this)
            .find(".skillbar-bar")
            .animate(
              {
                width: $(this).attr("data-percent")
              },
              2500
            );
        });
      }
    }
  });

  // move section down one
  $(document).on("click", "#moveDown", function () {
    $.fn.fullpage.moveSectionDown();
  });

  // fullpage.js link navigation
  $(document).on("click", "#apropos", function () {
    $.fn.fullpage.moveTo(2);
  });

  $(document).on("click", "#project", function () {
    $.fn.fullpage.moveTo(3);
  });

  $(document).on("click", "#contact", function () {
    $.fn.fullpage.moveTo(4);
  });

  // smooth scrolling
  $(function () {
    $("a[href*=#]:not([href=#])").click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html,body").animate(
            {
              scrollTop: target.offset().top
            },
            700
          );
          return false;
        }
      }
    });
  });

  //ajax form
  $(function () {
    // Get the form.
    var form = $("#ajax-contact");

    // Get the messages div.
    var formMessages = $("#form-messages");

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
      // Stop the browser from submitting the form.
      e.preventDefault();

      // Serialize the form data.
      var formData = $(form).serialize();

      // Submit the form using AJAX.
      $.ajax({
        type: "POST",
        url: $(form).attr("action"),
        data: formData
      })
        .done(function (response) {
          // Make sure that the formMessages div has the 'success' class.
          $(formMessages).removeClass("error");
          $(formMessages).addClass("success");

          // Set the message text.
          $(formMessages).text(response);

          // Clear the form.
          $("#name").val("");
          $("#email").val("");
          $("#message").val("");
        })
        .fail(function (data) {
          // Make sure that the formMessages div has the 'error' class.
          $(formMessages).removeClass("success");
          $(formMessages).addClass("error");

          // Set the message text.
          if (data.responseText !== "") {
            $(formMessages).text(data.responseText);
          } else {
            $(formMessages).text(
              "Oops! An error occured and your message could not be sent."
            );
          }
        });
    });
  });
});

//RACCOON
var leftHemisphere = document.querySelector('.left-hemisphere'),
     rightHemisphere = document.querySelector('.right-hemisphere'),
    muzzleBase = document.querySelector('.muzzle-base'),
    mouth = document.querySelector('.mouth'),
    leftEye = document.querySelector('.left-eye__circle'),
    rightEye = document.querySelector('.right-eye__circle'),
    rightEyebrow = document.querySelector('.right-eyebrow'),
    leftEyebrow = document.querySelector('.left-eyebrow'),
    text = document.querySelectorAll('.text'),
    heart = document.querySelector('.heart');
function addClasses(){
  leftHemisphere.classList.add('left-hemisphere-anim');
  rightHemisphere.classList.add('right-hemisphere-anim');
  muzzleBase.classList.add('muzzle-base-anim');
  mouth.classList.add('mouth-anim');
  leftEye.classList.add('eyes-anim');
  rightEye.classList.add('eyes-anim');
  rightEyebrow.classList.add('right-eyebrow-anim');
  leftEyebrow.classList.add('left-eyebrow-anim');
  text.forEach(function(letter){
    letter.classList.add('text-anim');
  })
  heart.classList.add('heart-anim');
}
addClasses();
function removeClasses(){
   leftHemisphere.classList.remove('left-hemisphere-anim');
  rightHemisphere.classList.remove('right-hemisphere-anim');
  muzzleBase.classList.remove('muzzle-base-anim');
  mouth.classList.remove('mouth-anim');
  leftEye.classList.remove('eyes-anim');
  rightEye.classList.remove('eyes-anim');
  rightEyebrow.classList.remove('right-eyebrow-anim');
  leftEyebrow.classList.remove('left-eyebrow-anim');
  text.forEach(function(letter){
    letter.classList.remove('text-anim');
  })
  heart.classList.remove('heart-anim');
}
heart.addEventListener('click',function(){
  removeClasses();
  setTimeout(function(){
    addClasses();
  },200)
})

/* image carousel*/
$(function() {
  
  var N = 0;
  var K = 0;
  var tt
  
  START();

  function START() {
    tt = setInterval(NEXT, 3000);
  }

  function NEXT() {

    if( N < $('.photo-slider-img').length - 1 ) {
      N++;
    } else {
      N = 0;
    }

    CHANGE();
  }

  function CHANGE() {
    K = 1;   
    $('.photo-slider-img.NOW').stop().animate({left: '-100%'}, 500);
    $('.photo-slider-img').eq(N).stop().css({left: '100%'}).animate({left: 0}, 500, OK);
  }

  function OK() {
    K = 0;
    $('.photo-page').removeClass('active').eq(N).addClass('active');
    $('.photo-slider-img').removeClass('NOW').eq(N).addClass('NOW');
  }



  $('.photo-page').on('click', function() {

    if( $(this).index() == N || K == 1 ) return;
    
    if ( tt ) {
       clearInterval( tt );
       tt = 0;
       N = $(this).index();
       CHANGE();
       START();
     }
  });

});
