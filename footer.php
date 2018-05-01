<footer class="footer1">

        <section>
            <div class="container center991">

                <div class="row flex">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="list list-2 rights">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li >
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="product.php">Products</a>
                            </li>
                            <li>
                                <a href="contact.php">Contacts</a>
                            </li>
                        </ul>
                    </div>


                    <!-- <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <span >
                            <b style="font-size: 1.4em;line-height: 3">Contact</b>
                        </span>
                        <ul>
                            <li>Address: </li>
                            <li>Tel:    </li>
                            <li>Email:  </li>
                        </ul>

                    </div> -->
                </div>
            </div>
        </section>

        <section>
            <div class="container center991">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p class="rights">
                            Metallum Europe© <span id="copyright-year">2018</span>
                            <a href="index-5.html">Privacy Policy</a>
                        </p>
                    </div>

                    <!-- <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 soc">
                        <ul class="inline-list inline-list-2">
                            <li>
                                <a href="#" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa  fa-google-plus"></a>
                            </li>
                        </ul>
                    </div> -->

                </div>


            </div>
        </section>


    </footer>
</div>

<?php include_once 'js.php'; ?>
<script>
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('footer').outerHeight();

$(window).scroll(function(event) {
  didScroll = true;
});

setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta)
    return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $('footer').removeClass('nav-down').addClass('nav-up');
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $('footer').removeClass('nav-up').addClass('nav-down');
    }
  }

  lastScrollTop = st;
}

</script>