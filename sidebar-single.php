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
                <h1 class="brand-title"><em>The</em> Beach Side Blues</h1>
            </div>
            <div class="menu-part pure-u-2-5">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="/faq">faq</a>
                </li>
                <li class="nav-item">
                    <a href="/podcast">podcast</a>
                </li>
                <li class="nav-item">
                    <a href="/faq">menu &raquo;</a>
                </li>
            </ul>
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
