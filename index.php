<?php
  ini_set( 'display_errors', 1 );
  ini_set( 'display_startup_errors', 1 );
  error_reporting( E_ALL );
  include './includes/ArticlesList.Class.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BlogPost Assingnment</title>
</head>
<body>
    <h1>PHP BlogPost Assingnment</h1>
    <?php
    $articles = new Articles ( dirname( __FILE__ ) . '/data/articles.json' ); // New object instance of "Articles " class.
    $articles->output(); 
  ?>
    
</body>
</html>