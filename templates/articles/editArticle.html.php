<?php
//1. ACCES EN LECTURE A LA BASE

try{$conn = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '');    $conn->exec("SET NAMES 'ISO 8859-1' ");              }
catch(Exception $e){die('Erreur de connexion à la base de donnees: '.$e->getMessage());}

$reponse = $conn->query('SELECT * FROM articles ');
//$articles = $reponse->fetch();

$table='<div id="lister"><table border=1 width=100% >'; 
$table.='<tr> <th>ID</th><th>DATE</th><th>TITRE</th><th>PHOTO</th> </tr>';
while($article = $reponse->fetch()){// en utlisant FOREACH ça marche pas .j'sais pas pourquoi |   
 $table.='<tr><td>'.$article["id"].'</td><td>'.$article["created_at"] .'</td><td>'.$article["title"].'</td><td><img src="img/'.$article['photo'].'" width="50" height="50" alt="" /></td></tr>'; 
}
$table.='</table></div>';

echo $table;
 
?>



<!--  formulaire de saisie  --> 
<div id="modifier" style="margin-left:5%; margin-top:5%;">
    <form  style="margin-left:16px;" action="index.php?controller=new_article&task=newarticle"  method="POST"    enctype="multipart/form-data" >       
        <input type="text" name="title"         placeholder="Titre"           style="width:96%; margin-bottom:5px;" />
        <input type="text" name="slug"          placeholder="Slug"             style="width:96%; margin-bottom:5px;" />
        <input type="text" name="introduction"  placeholder="Introduction"  style="width:96%; margin-bottom:5px;"/>
        <textarea name="content"  cols="30" rows="10" placeholder="Votre Article ..."  style="width:96%; margin-bottom:5px;"></textarea> 
        <input type="date" name="created_at"                             style="width:96%; margin-bottom:5px;"/>
        <input type="file" name="photo" placeholder="Photo"  style="width:96%; margin-bottom:5px;"/>    
        <button type="submit" style="width:96%;" >Enregistrer</button>       
    </form>
</div> 

