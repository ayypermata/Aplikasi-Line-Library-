<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan Politenik Pos Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Sinopsis Buku</h1>
</div>
  
<div class="container">
     <?php
      error_reporting(0);
      $host = "localhost";
	  $uname = "u630317391_prps";
	  $pass = "admin123";
	  $db = "u630317391_prps";
	  mysql_connect($host, $uname, $pass);
	  mysql_select_db($db);
	  
	  $sqlquery=mysql_query("select * from buku");
	  while($data=mysql_fetch_array($sqlquery)){
	      
	  
     ?>
  <div class="row">
    
    <div class="col-sm-4">
      <h3><?php echo $data["kode_buku"]; ?></h3>
      <p><?php echo $data["judul"]; ?></p>
      <p><?php echo $data["ket"]; ?></p>
    </div>
    
  </div>
  <?php
    }
    ?>
</div>

</body>
</html>