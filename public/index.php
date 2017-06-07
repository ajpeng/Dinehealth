<?php require_once("../includes/functions.php"); ?>
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

<nav class="nav-bar-default">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <section class="row-12">
	    <a class="navbar-brand">Dinesafe</a>
	  </div>
	      <ul class="nav navbar-nav">
	        <li class="nav-item"><a href="#">Home</a></li>
	        <li class="nav-item"><a href="#">Mission</a></li>
	        <li class="nav-item"><a href="#">Services</a></li>
	        <li class="nav-item"><a href="#">Staff</a></li>
	        <li class="nav-item"><a href="#">Testimonials</a></li>
	      </ul>
	    </section>
	  </div>
	</div>
</nav>


<hr/> <!-- -->

<div class="container">
  <div class="row">
    <section class="col-12">
      <form action="index.php?page=<?php echo urlencode("string"); ?>" method ="post">
        <h3> Name of establishment:  </h3>
        <input type="text" class="form-control" id="ESTABLISHMENT_NAME" name="ESTABLISHMENT_NAME"> </input>
        <br/>
        <input class="btn-primary" type="submit" value="submit" >
      </form>
      <div class="post-heading">
        <?php
              $html = "
              Establishment Name &nbsp Inspection Date &nbsp Severity
              ";
              $html .= "<br//>";
              $html .= "<a href=\"\"";
              $html .= implode_all_data();
              $html .= "</a>";

             //$html .= show_fine(INSPECTION_ID);
              echo $html;
        ?>
       </div>
    </section>
  </div>
</div>
<script src="js/main.js"></script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
