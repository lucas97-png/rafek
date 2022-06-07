function smoothScroll(element) {
  document.querySelector(element).scrollIntoView({
      behavior: 'smooth'
  });
}

window.onscroll = function() {
  scroll();
}

function scroll() {
  if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
      document.getElementById('up-button').style.display = "block";
  } else {
      document.getElementById('up-button').style.display = "none";
  }
}

var splide = new Splide( '#main-carousel', {
  pagination: false,
} );

var thumbnails = document.getElementsByClassName( 'thumbnail' );
var current;


for ( var i = 0; i < thumbnails.length; i++ ) {
  initThumbnail( thumbnails[ i ], i );
}

function initThumbnail( thumbnail, index ) {
  thumbnail.addEventListener( 'click', function () {
    splide.go( index );
  } );
}

splide.on( 'mounted move', function () {
  var thumbnail = thumbnails[ splide.index ];

  if ( thumbnail ) {
    if ( current ) {
      current.classList.remove( 'is-active' );
    }

    thumbnail.classList.add( 'is-active' );
    current = thumbnail;
  }
} );

splide.mount();

function get_action(form) 
{
    var v = grecaptcha.getResponse();
    if(v.length == 0)
    {
        document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
        return false;
    }
    else
    {
         document.getElementById('captcha').innerHTML="Captcha completed";
        return true; 
    }
}
