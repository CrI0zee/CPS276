<?php
class FAD{
  
  public $output;
  public $link_address;
  

  function add($string, $string2){
    global $output, $link_address;
    $link_address=$string;
   
    if(file_exists($link_address)){
      echo "Directory already exists";
    }else{
    mkdir($link_address,0777,true);
    $handle = fopen( "{$link_address}/readMe.txt", "w" );
    fwrite($handle,$string2);
    fclose($handle);
    echo '<a href="'.$link_address.'/readMe.txt">Link</a>';
    

    }
   
   
  }

  


}

$obj = new FAD();

if(isset($_POST['submit']))
{
  $string = $_POST['nameOfDirectory'];
  $string2 = $_POST['textToInput'];
  
  $obj->add($string, $string2);
}

?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 style="font: size 40px;">Files and Directories</h1>
<p>Enter a folder name and contents of a file. Only alpha-numeric characters only</p>




<form method="post" action="aTitle.php">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Folder Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nameOfDirectory">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">File Content</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textToInput"></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="submit">Submit</button>
  </div>

</form>
</body>
</html>