<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">


    <?php

      $name = "Peter";
      $last = "Suh";

      // Create an array of post objects using the display_post function

      $posts = ["allofmychildren", "awesome dogs", "whatamIdoing?", "wherearethegirls"];






      // Loop through array of posts and display each one on the page

        // Call the display_title function and pass it the $post
        function display_post($title){
          echo "<h3>$title</h3>";
        }

      /**
       * Custom function for displaying the title and content for a post
       *
      */

    ?>
    <h2>Welcome</h2>
    <p>My name is "<?php echo $name.' '.$last; ?>"</p>

    <?php foreach($posts as $post){
      display_post($post);
    }

    ?>


  </div>

</body>
</html>
