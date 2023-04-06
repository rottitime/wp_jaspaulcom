<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="icon" href="/favicon.ico" sizes="any" />
<link rel="icon" href="/favicon.svg" type="image/svg+xml" />
<?php 
wp_head();
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2VLG0J5DFX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-2VLG0J5DFX');
</script>
<?php if ($is_dev): ?>
    <link rel="stylesheet" href="http://localhost:3000/style.css">
    <script type="module" src="http://localhost:3000/script.js"></script>
<?php else: ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css">
    <script type="module" src="<?php echo get_template_directory_uri(); ?>/dist/script.js"></script>
<?php endif; ?>

</head>
<body>

