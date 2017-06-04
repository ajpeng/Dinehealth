<?php require_once("../includes/db_connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Bootstrap</title>
</head>
<body>

<div class="container">
  <div class="clow">
    <section class="col-12">
      <ul class="nav">
        <li class="nav-item"><a href="#">Home</a></li>
        <li class="nav-item"><a href="#">Mission</a></li>
        <li class="nav-item"><a href="#">Services</a></li>
        <li class="nav-item"><a href="#">Staff</a></li>
        <li class="nav-item"><a href="#">Testimonials</a></li>
      </ul>
    </section>
  </div>
</div>

<hr/>

<div class="container">
  <div class="row">
    <section class="col-12">
      <form action="index.php>page=<?php echo urlencode(str); ?>" method ="post">
        Name of establishment: 
        <input type="text" name="ESTABLISHMENT_NAME"> </input>
        <input type="submit" value="submit" >
      </form>
      <p> The establishment, recieved with the status of 
        <?php 
          if(isset($_POST["ESTABLISHMENT_NAME"])){
            $query = "SELECT FROM Dinesafe ";
            $query .= "WHERE ESTABLISHMENT_NAME = ";
            $query .= "{$_POST["ESTABLISHMENT_NAME"]} ";
            $query .= "LIMIT 1";
          }          

        ?>
      </p>
    </section>
  </div>
</div>



<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
