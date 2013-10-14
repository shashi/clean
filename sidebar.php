<div class="sidebar pure-u">
  <header class="header pure-u-1">
    <div class="pure-g-r">
      <div class="pure-u-3-5">
        <h1 class="brand-title"><a href="/">The Beach Side Blues</a></h1>
      </div>
      <div class="menu-part pure-u-2-5">
        <div id="clean-nav">
        <ul class="nav-list" id="std-menu-items">
          <li class="nav-item">
            <a href="/about">about</a>
          </li>
          <li class="nav-item">
            <a href="/category/podcast">podcast</a>
          </li>
          <li class="nav-item" id="menu-opener">
            <a href="javascript:void()">menu <span class="circle">&rarr;</span></a>
          </li>
        </ul>
    </div>

    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => '',
        'container_class' => false,
        'menu_class' => 'real-menu',
    )); ?>

  </div>
  </header>
  <div class="photo-credits">Photograph courtesy Jai Ram (batch of 2012)</div>
</div>
<script src="<?php echo get_template_directory_uri() . "/js/jquery-1.10.2.min.js" ?>"></script>
<script>
$(document).ready(function () {
    function hoverDelay(over, out, delayOver, delayOut) {

        var overT = 0, outT = 0;
        wrappedOver = function () {
            clearTimeout(outT);
            overT = setTimeout(over, delayOver);
        }

        wrappedOut = function () {
            clearTimeout(overT);
            outT = setTimeout(out, delayOut);
        }

        return {over: wrappedOver, out: wrappedOut}
    }

    $(".real-menu > ul").eq(0).addClass("sf-vertical sf-menu").superfish({
    });

    var wrapped = hoverDelay(function () {
        $(".real-menu").fadeIn("fast");
    }, function () {
        $(".real-menu").fadeOut("fast");
    }, 200, 500);


    // <!-- ugh. -->
    $("#menu-opener").click(function () {
        $(".real-menu").fadeToggle("fast");
    });
    $(".real-menu").mouseout(wrapped.out);
    $(".real-menu").mouseover(wrapped.over);
});
</script>
