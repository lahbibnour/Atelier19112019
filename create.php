<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>create</title>
</head>
<body>
<div class="container">
<fieldset>
<form action="store.php" method="post">
 <div>
    <label>Firstname</label>
    <input type="text"  class="form-control" name="firstname" id="firstname">
</div>
<div>
    <label>Lastname</label>
    <input   type="text"  class="form-control" name="lastname" id="lastname">
</div>
<div>
    <label>Email</label>
    <input  type="email"  class="form-control" name="email" id="email">
 </div>
<div>
    <label>Phone</label>
     <input  type="text"  class="form-control" name="phone" id="phone">  
</div>
<br>
<div >
     <button type="submit" class="btn btn-primary">Enregistrer</button>
    <button type="reset" class="btn btn-danger">Annuler</button>
</div>
</form>
</fieldset>
        
</div>  
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>