<?php
/**
 * Sidebar in single blog posts
 */
?>
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
                <h1 class="brand-title">The Beach Side Blues</h1>
            </div>
            <div class="menu-part pure-u-2-5">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="/faq">faq</a>
                </li>
                <li class="nav-item">
                    <a href="/forum">forum</a>
                </li>
                <li class="nav-item">
                    <a href="/faq">menu &raquo;</a>
                </li>
            </ul>
        </div>

        <div class="page-meta-wrap pure-u-1">
            <div class="centered">
                    <img class="avatar"
                         alt="Tilo Mitra's avatar" src="http://purecss.io/img/common/tilo-avatar.png"
                         height="48" width="48">
             </div>
                <div class="name">Shashank Shivdev</div>
                    <p class="post-author pure-u-1">
                     A fourth year student of Civil Engineering. He is a compulsive gamer, often considered to be one of the best in the college, as far as the Warcraft Games are concerned.
When he isn’t buggering “off to the woods of Azeroth”, Shashank enjoys a game of basketball, playing on his guitar and once in three years, he indulges in creative writing.
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
