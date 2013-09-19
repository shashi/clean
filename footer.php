<?php
foreach(
    array('jquery-1.10.2.min.js',
          'hoverIntent.js',
          'superfish.js',
          'interaction.js') as $js) {

    $js = get_template_directory_uri() . "/js/" . $js;
    echo "<script src='$js'></script>";
}
?>

<div class="pure-u-1 footer">
    
<a href="/wp-login.php">Login</a> &middot;
<a href="/wp-login.php?action=register">Register</a> &middot;
<a href="https://www.facebook.com/TheBeachSideBlues">Facebook</a> &middot;
<a href="http://www.twitter.com/BeachsideBlues">Twitter</a> &middot;
<a href="http://nitk.ac.in">NITK</a> &middot;
<a href="/faq">FAQ</a> &middot;
&copy; 2012-2013 The Beach Side Blues
</div>

</div>
</div>
</body>
</html>
