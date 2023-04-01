<header class="main-nav">
<h2><a rel="home" href="/">
<?php 
        if ( has_custom_logo() ) {
            the_custom_logo();
        } 
?>
<?php 
echo get_bloginfo( 'name' );
?>
</a></h2>
<button>Menu</button>

<nav>

<div class="head">
<img src="https://www.jaspaul.com/images/114.png" alt="Profile picture" width="528" height="560" />
<h4>Jaspaul Aggarwal</h4>
<h5>Web Developer</h5>
</div>

<?php
wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'menu_class' => 'menu',
        'container' => 'ul',
        'items_wrap' => '<ul class="menu">%3$s</ul>',
    )
);
?>


<div class="foot">
<h4>Follow me</h4>
<ul>
<li><a href="/file_download/5/cv_web.pdf" class="fa-file-pdf-o " title="Jaspauls cv"></a></li>
<li><a href="https://www.linkedin.com/in/jasagg/" class="fa-linkedin-square " title="LinkedIn"></a></li>
<li><a href="https://twitter.com/rotti_time" class="fa-twitter-square" title="Twitter"></a></li>
<li><a href="/rss/" class="fa-rss-square" title="RSS"></a></li>
<li><a href="#/information/contact.html" class="fa-envelope-open-o" title="Contact"></a></li>
</ul>
</div>

</nav>
<?php 
    wp_footer();
?>
</body>
</html>