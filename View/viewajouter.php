<?php $this->title = "inscription"; ?>
<html>
 <head> 
<title>INSCRIPTION</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
</body>
<form  METHOD="Post">
<div class="mb-3">
<label  style="color:blue">NOM :</label>
<input style="border:5px solid #0000FF" type="TEXT" NAME="nom" placeholder="nom"  class="form-control"><br/>
</div>
<div class="mb-3">
<label  style="color:blue">PRENOM :</label> 
<input style="border:5px solid #0000FF" type="TEXT" placeholder="prenom" NAME="prenom" class="form-control" > <br/>
</div>
<div class="mb-3">
<label  style="color:blue">AGE :</label> 
<input style="border:5px solid #0000FF" type="NUMBER" placeholder="age" NAME="age" class="form-control"  > <br/>
</div>
<label  style="color:blue">CNE :</label> 
<input style="border:5px solid #0000FF" type="text" placeholder="cne" NAME="cne" class="form-control"  > <br/>
</div>
<div class="mb-3">
<INPUT style="background-color :#00008B " type="submit" name="save"  VALUE="ENREGISTRER" class="form-control">
</div>
</form>
</html>
