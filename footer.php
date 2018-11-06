      </div>
     </main>
  <footer class="footer" id="footer">
    <div class="row">
      <div class="col-md-12">
        <p>
          © <a href="/">Vladyslav Verbytskyi</a> 2018. All code <a href="https://opensource.org/licenses/MIT" target="_blank" rel="noreferrer"> MIT license</a>.
        </p>
        <div class="footer-social">
          <a href="https://www.facebook.com/vadag0n"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/vadag0n/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="skype:vadag0n?chat"><i class="fa fa-skype" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </footer>

</div>
</body>




<link rel='stylesheet' href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/components-font-awesome/css/font-awesome.min.css" type='text/css' media='all' />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lora%3A400%2C700%2C400italic%2C700italic&#038;ver=4.9.3' type='text/css' media='all' />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800&#038;ver=4.9.3' type='text/css' media='all' />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Sanchez%3A400%2C400italic&#038;ver=4.9.3' type='text/css' media='all' />

<?php if(is_single()){ ?>
<script type='text/javascript' src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery/dist/jquery-1.12.4.min.js"> </script>
<script type='text/javascript'>


    /*jshint browser: true, strict: true, undef: true */

    ( function( window ) {

    'use strict';

    // class helper functions from bonzo https://github.com/ded/bonzo

    function classReg( className ) {
      return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
    }

    // classList support for class management
    // altho to be fair, the api sucks because it won't accept multiple classes at once
    var hasClass, addClass, removeClass;

    if ( 'classList' in document.documentElement ) {
      hasClass = function( elem, c ) {
        return elem.classList.contains( c );
      };
      addClass = function( elem, c ) {
        elem.classList.add( c );
      };
      removeClass = function( elem, c ) {
        elem.classList.remove( c );
      };
    }
    else {
      hasClass = function( elem, c ) {
        return classReg( c ).test( elem.className );
      };
      addClass = function( elem, c ) {
        if ( !hasClass( elem, c ) ) {
          elem.className = elem.className + ' ' + c;
        }
      };
      removeClass = function( elem, c ) {
        elem.className = elem.className.replace( classReg( c ), ' ' );
      };
    }

    function toggleClass( elem, c ) {
      var fn = hasClass( elem, c ) ? removeClass : addClass;
      fn( elem, c );
    }

    window.classie = {
      // full names
      hasClass: hasClass,
      addClass: addClass,
      removeClass: removeClass,
      toggleClass: toggleClass,
      // short names
      has: hasClass,
      add: addClass,
      remove: removeClass,
      toggle: toggleClass
    };

    })( window );



    var menuLeft = document.getElementById( 'pmenu' ),
    showLeftPush = document.getElementById( 'showLeftPush' ),
    hideLeftPush = document.getElementById( 'hideLeftPush' ),
    body = document.body;

    showLeftPush.onclick = function() {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'pmenu-push-toright' );
      if (classie.has(showLeftPush,"fa-bars")) {
        classie.remove(showLeftPush,"fa-bars");
        classie.add(showLeftPush,"fa-times");
      } else {
        classie.add(showLeftPush,"fa-bars");
      }
      classie.toggle( menuLeft, 'pmenu-open' );
      disableOther( 'showLeftPush' );
    };
    hideLeftPush.onclick = function() {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'pmenu-push-toright' );
      classie.toggle( menuLeft, 'pmenu-open' );
      disableOther( 'hideLeftPush' );
      classie.add(showLeftPush,"fa-bars");
    };

        function disableOther( button ) {
      if( button !== 'showLeftPush' ) {
        classie.toggle( showLeftPush, 'disabled' );
      }
    }



</script>
<?php } ?>

</html>