<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#FFCD00">

        <title><?php wp_title ( ''   ); ?> </title>
        <meta name="description" content="A collection of artist interpretations of emoji. Curated into an awesome hardcover book.">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url' );?>">

        <?php wp_head(); ?>
    </head>

    <body>

        <header>

            <div class="center">

                <h1><a href="index.html">Emoji Book</a></h1>

                <nav>

                    <h1 class="hidden">Main navigation</h1>

                    <ul>
                        <li><a href="emojis.html">Emojis</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="action"><a href="submit.html">Submit</a></li>
                    </ul>

                </nav>

            </div>

        </header>