<!-- <form method="post" action="index_hasil.php">
  Masukkan Link :<br>
  <input type="text" name="link" id="link" onkeyup="replace()">
  <input type="text" id="convert">
  <input type="submit" value="Convert">
  <input type="reset" value="Clear">
</form>

<script>
    function replace(){
        var text = document.getElementById("link").value;
        var newText = text.replace("goo.gl", "google.com");
        document.getElementById("convert").value = newText;
    }
 </script>
 
<input type="text" id="link">
<input type="text" id="convert">
<button onclick="replace()">Convert</button>

<script>
    function replace(){
        var text = document.getElementById("link").value;
        var newText = text.replace("goo.gl", "google.com");
        document.getElementById("convert").value = newText;
    // }
</script>



<form method="post" action="index_hasil.php">
  Masukkan Link :<br>
  <input type="text" name="link" id="link">
  <input type="submit" value="Convert">
  <input type="reset" value="Clear">
</form>
-->


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
  <form method="post" action="index_hasil.php">

<div class="form-group">
   <label for="pwd">Masukan Link:</label>
  <textarea class="form-control" rows="5" name="link" id="link"></textarea>
</div>
	<button type="submit" value="Convert" class="btn btn-primary">Convert</button>
	<button type="reset" value="Clear" class="btn btn-primary">Clear</button>
  </form>
</div>

</body>
</html>