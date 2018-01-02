<?PHP

$string = $_POST["link"];

// Google Drive Sharing //
$string=str_replace('https://drive.google.com/file/d/', 'https://www.googleapis.com/drive/v3/files/', $string);
$string=str_replace('/view?usp=sharing', '?alt=media&key=AIzaSyCwJONwulaoF1K-pE5KPSQ-xyrEEVVx4Fs', $string);
$string=str_replace('/view', '?alt=media&key=AIzaSyCwJONwulaoF1K-pE5KPSQ-xyrEEVVx4Fs', $string);
$string=str_replace('/edit', '?alt=media&key=AIzaSyCwJONwulaoF1K-pE5KPSQ-xyrEEVVx4Fs', $string);
$string=str_replace('https://drive.google.com/uc?id=', 'https://www.googleapis.com/drive/v3/files/', $string);
$string=str_replace('&export=download', '?alt=media&key=AIzaSyCwJONwulaoF1K-pE5KPSQ-xyrEEVVx4Fs', $string);
$string=str_replace('https://drive.google.com/uc?id=', 'https://drive.google.com/file/d/', $string);
$string=str_replace('https://www.mp4upload.com/', 'http://www.embed-kode.ml/mp4upload.php/?v=', $string);
$string=str_replace('http://www.mediafire.com/file/', 'http://www.embed-kode.ml/media.php/?id=', $string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Google Drive DirectLink</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>LINK CONVERTER</h2>
  <form method="post" action="convertplayer.php">
	<br>
	 <label for="pwd">Hasil:</label> <a href="<?php echo $string?>"><?php echo $string ?></a> 
	<br>
	<button type="submit" value="Back" class="btn btn-primary">Back</button>
	<br>
  </form>
</div>

</body>
</html>