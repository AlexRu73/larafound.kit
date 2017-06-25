<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/public/css/app.css" rel="stylesheet">

    <title>Laravel + ZURB Foundation</title>

    <script>
    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
    </script>
    <!-- <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/foundation.min.js"></script> -->


</head>
<body>


    <!-- Start Top Bar -->
        <div class="top-bar">
          <div class="top-bar-left">
            <ul class="menu">
              <li class="menu-text">Marketing Site</li>
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu">
              <li><a href="#">Three</a></li>
              <li><a href="#">Four</a></li>
              <li><a href="#">Five</a></li>
              <li><a href="#">Six</a></li>
            </ul>
          </div>
        </div>
        <!-- End Top Bar -->

        <div class="row columns">
          <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <ul class="orbit-container">
              <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
              <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
              <li class="orbit-slide is-active">
                <img src="http://placehold.it/1200x450">
              </li>
              <li class="orbit-slide">
                <img src="http://placehold.it/1200x450">
              </li>
              <li class="orbit-slide">
                <img src="http://placehold.it/1200x450">
              </li>
              <li class="orbit-slide">
                <img src="http://placehold.it/1200x450">
              </li>
            </ul>
          </div>
        </div>

        <div class="row column text-center">
          <h1>Changing the World Through Design</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
          <a href="#" class="button large">Learn More</a>
          <a href="#" class="button large hollow">Learn Less</a>
        </div>

        <hr>

        <div class="row">
          <div class="medium-6 large-3 columns">
            <h3>Lorum</h3>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
          </div>
          <div class="medium-6 large-3 columns">
            <h3>Ipsum</h3>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
          </div>
          <div class="medium-6 large-3 columns">
            <h3>Dolor</h3>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
          </div>
          <div class="medium-6 large-3 columns">
            <h3>Sit Amet</h3>
            <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
          </div>
        </div>

        <hr>

        <div class="row column">
          <div class="callout primary text-center">
            <h3>Really Great Deals</h3>
            <p>
The <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Fancy word for a beetle.">scarabaeus</span> hung quite clear of any branches, and, if allowed to fall, would have fallen at our feet. Legrand immediately took the scythe, and cleared with it a circular space, three or four yards in diameter, just beneath the insect, and, having accomplished this, ordered Jupiter to let go the string and come down from the tree.
</p>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor.</p>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="large-6 columns">
            <h4>Nulla At Nulla Justo, Eget</h4>
            <img class="thumbnail" src="http://placehold.it/700x250">
            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in.</p>
          </div>
          <div class="large-6 columns">
            <h4>Nulla At Nulla Justo, Eget</h4>
            <img class="thumbnail" src="http://placehold.it/700x250">
            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in.</p>
          </div>
        </div>

        <hr>

        <div class="row column">
          <ul class="menu">
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
            <li><a href="#">Four</a></li>
          </ul>
        </div>


@include('block.lang')

    <script src="/public/js/app.js"></script>
</body>
</html>
