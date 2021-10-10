<?php $title = "About Website"; ?>
<?php ob_start(); ?>

<section id="aboutSite">
    <h1><i>OUR STORY</i></h1>
    <div class=" storyBoard">
        <p>
            Our aim is to provide an easy way for employees to find a place to move from Paris and its region to another city or countryside.
            The site will help you to find a place that is specifically accessible by train and will allow you to know the distance between Paris and your destination.
            If you're also wishing to travel for a short period of time, Our website can help you find what you need.
        </p>

    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>