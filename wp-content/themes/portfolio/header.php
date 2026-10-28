<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <?php
        $background_mode = "light mode";
        ?>

        <button class="background-mode head_cont theme" type="button">
            <span id="background_text"><?php echo $background_mode; ?></span>
            <span class="header_line" aria-hidden="true"></span>
        </button>
        </div>


    </header>