<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Techiyon Landing Page | Rifky Niyas</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="min-h-[95vh] relative bg-[#F9F9FF]">
        <div class="blur-circle absolute top-0 left-0"></div>
        <div class="blur-circle absolute top-2/4 right-0"></div>
        <header class="flex justify-between items-center container border-b border-b-[#EAE8F3] 
        py-8 md:py-10 px-14 relative">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo">
            </a>
            <nav class="navbar hidden" id="navbar">
                <div class="relative">
                    <button class="flex-center gap-x-1" id="dropdownBtn">
                        FEATURES
                        <span class="iconify" data-icon="charm:chevron-down" data-width="12" data-height="12"></span>
                    </button>
                    <div class="flex flex-col hidden absolute bg-white mt-2 py-2 rounded" id="dropdownContent">
                        <a href="#" class=" py-2 px-3">Productivity</a>
                        <a href="#" class=" py-2 px-3">Efficiency</a>
                        <a href="#" class=" py-2 px-3">Managament</a>
                    </div>
                </div>
                <a href="#">PRICING</a>
                <a href="#">WATCH A DEMO</a>
                <a href="#" class="btn btn-secondary hide-desktop">LOG IN</a>
                <a href="#" class="btn btn-primary hide-desktop">SIGN UP</a>
            </nav>
            <div class="flex hide-mobile">
                <a href="#" class="btn btn-secondary mr-4">LOG IN</a>
                <a href="#" class="btn btn-primary">SIGN UP</a>
            </div>
            <div id="toggleNavBtn" class="hide-desktop">
                <span class="iconify hide-desktop" data-icon="charm:menu-hamburger" data-height="24" data-width="24"></span>
            </div>
        </header>