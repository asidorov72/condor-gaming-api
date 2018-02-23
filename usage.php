<?php

  require_once __DIR__ . '/config/autoload.php';
  use \Database\Db;
  
  $config = new Db();

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		
		$url = "http://condor-gaming-test-api.loc/api/".$name;
		
		$ch = curl_init($url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POST, 1);
		$response = curl_exec($ch);
    
    echo $response;
	}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Condor Gaming Test API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Condor Gaming Test API</h2>
  <form class="form-inline" action="" method="POST">
    <div class="form-group">
      <label for="name[]">Name</label>
      <select class="selectpicker form-control" name="name">
        <?php foreach($config->params->resource as $name): ?>
        <option <?php echo (isset($_POST['name']) && $name == $_POST['name']) ? 'selected' : ''; ?>><?php echo $name; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>