<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
     ?>

    <fieldset align = "right">

       <h1 align="left"><b> Fast IT Service</b></h1>
         Logged in as <?php echo $_SESSION['name']; ?>
         <meta ><a href ="logout.php">Logout </a> </meta>




     </fieldset>

  </body>
</html>
