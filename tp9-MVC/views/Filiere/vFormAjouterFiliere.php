<h1>Ajouter une Filière</h1>
<hr />

<form name = "myForm" action = "" method = "post">


<!-- chaque  élément de formulaire à un attribut name -->
Entrez le code de la filière:              
<input type="text" name="CodeF" value="<?= isset($_POST["CodeF"])?$_POST["CodeF"]:""?>"/> <span class="Err"><?= isset($erreur["CodeF"])? $erreur["CodeF"]:"" ?> </span>
<!-- <br>
<br>
<br>
 -->

Entrez l'intitulé:
<input  type="text"  name="Intitule" size = "50" value="<?= isset($_POST["Intitule"])?$_POST["Intitule"]:""?>" /> <span class="Err"><?= isset($erreur["Intitule"])? $erreur["Intitule"]:"" ?> </span>
<!-- <br>
<br>
<br> -->

<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />

</form>