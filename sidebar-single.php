<!-- script to hide sidebar after some scrolling -->
<script>
function onScroll () {
    // if page offset is above 700, approx 1 page,
    // start to hide sidebar
    var off = window.pageYOffset;
    //var opacity = (off > 700) ? Math.pow(2.18, 0.05 * (700 - off)) : 1;
    var opacity = (onScroll.o && off > 600) || (!onScroll.o && off > 500) ? 0 : 1;
    onScroll.o = opacity;
    console.log(off, opacity);
    document.getElementsByClassName("sidebar")[0].style.opacity = Math.round(opacity);

}

onScroll.o = 1;
window.onscroll = onScroll;
</script>

<div class="sidebar pure-u" id="hideonscroll">
    <header class="header pure-u-1">
        <div class="pure-g-r">
            <div class="pure-u-3-5">
                <h1 class="brand-title"><a href="/"><em>The</em> Beach Side Blues</a></h1>
            </div>
            <div class="menu-part pure-u-2-5">
            <div id="clean-nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="/about-us">about</a>
                    </li>
                    <li class="nav-item">
                        <a href="/podcast">podcast</a>
                    </li>
                    <li class="nav-item" id="menu-opener">
                        <a href="#">menu &raquo;</a>
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
        </div>

        <div class="page-meta-wrap pure-u-1">
            <div class="centered">
                <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
             </div>
                 <div class="name"><?php the_author(); ?></div>
                    <p class="post-author pure-u-1">
                        <?php the_author_description(); ?>
                 </p>
                <p class="post-date pure-u-1">
                <strong>Published</strong> Dec. 09, 2012
                </p>
                <p class="post-categories pure-u-1">
                <strong>In</strong> Leisure, Opinion, Gaming
                </p>
        </div>
    </header>
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
