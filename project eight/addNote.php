<?php

if(isset($_POST['AddNote']))
{
  require_once 'classes/Date_Time.php';
  $dT = new Date_Time();
  $dT->addNote();
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
      <h1>Add Notes</h1>
      <a href="displayNote.php">Display Notes</a>
    </header>
    <main>
      
      
      <form action="addNote.php" method="post">
      
      <div class="form-group">
          <label for="date">Date and Time</label>
          <input type="date" class="form-control" id="dates" name="dates">
        </div>
        
      <div class="form-group">
        <label for="Notes">Notes</label>
        <textarea class="form-control" id="Notes" name="Notes" rows="15"></textarea> 
        </div>
       
      <div class="col-sm-10">
          <input type="submit" name="AddNote" value="Add Note" class="btn btn-primary">
        </div>
        
        
        
      </form> 
    </main>
    
  </div>
</body>
</html>