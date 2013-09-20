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
<a href="https://www.facebook.com/TheBeachSideBlues">Facebook</a> &middot;
<a href="http://www.twitter.com/BeachsideBlues">Twitter</a> &middot;
<a href="http://nitk.ac.in">NITK</a> &middot;
<a href="/faq">FAQ</a> &middot;
&copy; 2012-2013 The Beach Side Blues &middot;
<a href="/wp-login.php">Login</a> &middot;
<a href="/wp-login.php?action=register">Register</a>
</div>

</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41921275-1', 'beachsideblues.com');
  ga('send', 'pageview');

</script>
</body>
</html>
