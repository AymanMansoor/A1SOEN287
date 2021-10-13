$(document).ready(function(){


        $(window).scroll(function() {
        if ($(document).scrollTop() > 300) {
            $('.top').fadeIn('slow');
        }
        else {
            $('.top').fadeOut('slow');
        }
    });
    
    $('.top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 100);
    });
   
    
        $('.myHTMLvideo').click(function() {
        this.paused ? this.play() : this.pause();
    });
    
    
      jQuery('.btn-open').on('click', function() {
    jQuery('#overlay').addClass('overlay-active');
    jQuery(".pop-up").fadeIn("fast", function() {
      jQuery('.pop-up').addClass('pop-up-active');
    });
  });
  jQuery('.btn-close,#overlay').on('click', function() {
      jQuery('#overlay').removeClass('overlay-active');
    jQuery(".pop-up").fadeOut("fast", function() {
      jQuery('.pop-up').removeClass('pop-up-active');
    });
  });
    
 
});


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}








function makeFullScreen(divObj) {
    if (!document.fullscreenElement && // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (divObj.requestFullscreen) {
            divObj.requestFullscreen();
        } else if (divObj.msRequestFullscreen) {
            divObj.msRequestFullscreen();
        } else if (divObj.mozRequestFullScreen) {
            divObj.mozRequestFullScreen();
        } else if (divObj.webkitRequestFullscreen) {
            divObj.webkitRequestFullscreen();
        } else {
            console.log("Fullscreen API is not supported");
        }

    } else {

        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }

    }
}

