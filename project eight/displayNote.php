<?php
$output = "";
if(isset($_POST['GetNote']))
{
  require 'classes/Date_Time.php';
  $dT = new Date_Time();
 $output = $dT->getNote();
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
<body class="container">
<div id="wrapper">
    <header>
      <h1>Display Notes</h1>
      <a href="addNote.php">Add Notes</a>
    </header>
    <main>
      
      
      <form action="displayNote.php" method="post">
      
      <div class="form-group">
          <label for="begdate">Beginning Date</label>
          <input type="date" class="form-control" id="begDate" name="begDate">
        </div>
        
        <div class="form-group">
          <label for="enddate">End Date</label>
          <input type="date" class="form-control" id="endDate" name="endDate">
        </div>
       
      <div class="col-sm-10">
          <input type="submit" name="GetNote" value="Add Note" class="btn btn-primary">
        </div>
        
        
        
      </form> 
      <?php echo $output; ?>
    </main>
    
  </div>
</body>
</html>