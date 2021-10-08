<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../index.css">
   </head>

  <body>
   <?php
   if (isset($_POST["password"]) and $_POST["password"]=='123456'){
   ?>
      <p> You did it!!</p>
      <a href="2.html"> next challenge </a>
   <?php
   }else {
      header("Location: 1.html");
   };
     ?>
  </body>

</html>