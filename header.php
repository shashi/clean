<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <?php
    foreach(
        array('pure-min.css',
              'blog.css',
              'superfish.css',
              'superfish-vertical.css') as $css) {

        $css = get_template_directory_uri() . "/css/" . $css;
        echo "<link rel='stylesheet' href='$css'></link>";
    }
    ?>

    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:700,400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:700,400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:700,400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkren:700,400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lovers+Quarrel:100,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>

</head>
<body>

