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
</div>
</body>
</html>
