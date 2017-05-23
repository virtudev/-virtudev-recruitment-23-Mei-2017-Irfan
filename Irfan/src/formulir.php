<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="panel panel-primary">
  <div class="panel-heading">Formulir</div>
  <div class="panel-body">
  <form class="form-horizontal" method="post" action="simpan.php">
    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="time"></label>
      <div class="col-sm-10">
        <input type="timedate" class="form-control" id="waktu" placeholder="Masukan" name="waktu">
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama anda:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    </div>
    </div>
  </form>
  </div>
</div>
</body>
</html>