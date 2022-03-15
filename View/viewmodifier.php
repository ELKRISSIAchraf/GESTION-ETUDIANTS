<?php $this->title = "MODIFICATION"; 
?>
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
<label style="color:blue" >NOM :</label>
<input style="border:5px solid #0000FF" type="TEXT" NAME="nom" placeholder="nom"  class="form-control"><br/>
</div>
<div class="mb-3">
<label style="color:blue" for="">PRENOM :</label> 
<input style="border:5px solid #0000FF" type="TEXT" NAME="prenom" placeholder="prenom" class="form-control" > <br/>
</div>
<div class="mb-3">
<label style="color:blue">AGE :</label> 
<input style="border:5px solid #0000FF" type="NUMBER" NAME="age" placeholder="age" class="form-control"  > <br/>
</div>
<label style="color:blue">CNE :</label> 
<input type="text" NAME="cne" style="border:5px solid #0000FF" placeholder="cne" class="form-control"  > <br/>
</div>
<div class="mb-3" >
<INPUT style="background-color :#A52A2A" name="save"  type="submit" VALUE="MODIFIER"   class="form-control">
<INPUT type="submit" style="background-color :#7FFF00" VALUE="REVENIR A LA LISTE"  formaction="http://localhost/atelier1/index.php?action=afficher" class="form-control">
</div>
</form>
</html>