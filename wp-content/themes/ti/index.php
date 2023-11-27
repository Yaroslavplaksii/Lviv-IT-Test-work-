<?php wp_head();?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php the_title();?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swipebox.css">
    </head>
    <body>
        <div class="main">
            <?php get_template_part('header');?>
            <?php get_template_part('content');?>
            <?php get_template_part('footer');?>
        </div>
    </body>
</html>
<?php wp_footer();?>