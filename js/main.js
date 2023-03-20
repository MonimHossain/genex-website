/* contact Tab */
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});




jQuery(document).ready(function( $ ) {
$('.count').counterUp({
delay: 4, /*the delay time in ms*/
time: 3000 /*the speed time in ms*/
});
});





/*Carousel Auto-Cycle slider
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 7000
    })
  });

*/






  /*Google Map API */

  $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});




  function openNav(pid) {
    document.getElementById(pid).style.width = "100%";
}

function closeNav(pid) {
    document.getElementById(pid).style.width = "0%";
}


if($('.slide').length){
  $(document).ready(function(){
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length){
      $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top) {
          $(".navbar-default").css('background-color', '#ffffff');
          $(".navbar-default .navbar-nav>li>a").css('color', '#3a3d3b');
        } else {
          $('.navbar-default').css('background-color', 'transparent');

        }
      });
    }
  });



  $(document).ready(function () {
    /*rotation speed and timer*/
    var speed = 5000;

    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; /*id of previous button*/
    var next = 'next'; /*id of next button*/
    slides.width(item_width); /*set the slides to the correct pixel width*/
    container.parent().width(item_width);
    container.width(slides.length * item_width); /*set the slides container to the correct total width*/
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();


    /*if user clicked on prev button*/

    $('#buttons a').click(function (e) {
      /*slide the item*/

      if (container.is(':animated')) {
        return false;
      }
      if (e.target.id == previous) {
        container.stop().animate({
          'left': 0
        }, 1500, function () {
          container.find(elm + ':first').before(container.find(elm + ':last'));
          resetSlides();
        });
      }

      if (e.target.id == next) {
        container.stop().animate({
          'left': item_width * -2
        }, 1500, function () {
          container.find(elm + ':last').after(container.find(elm + ':first'));
          resetSlides();
        });
      }

      /*cancel the link behavior*/
      return false;

    });

    /*if mouse hover, pause the auto rotation, otherwise rotate it*/
    container.parent().mouseenter(function () {
      clearInterval(run);
    }).mouseleave(function () {
      run = setInterval(rotate, speed);
    });


    function resetSlides() {
      /*and adjust the container so current is in the frame*/
      container.css({
        'left': -1 * item_width
      });
    }

  });

/*
a simple function to click next link
a timer will call this function, and the rotation will begin
*/
function rotate() {
  $('#next').click();
}

}

(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1902266896725663";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

document.documentElement.style.overflowX = 'hidden';