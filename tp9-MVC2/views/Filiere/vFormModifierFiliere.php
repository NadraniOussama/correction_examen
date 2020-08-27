<h1>Modifier une Filière</h1>
<hr />

<form name = "myForm" action = "" method = "post">

<pre>
<!-- chaque  élément de formulaire à un attribut name -->
Entrez le code de la filière:              
<input type="text" name="CodeF" value="<?= isset($_POST["codeF"])?$_POST["codeF"]:$data["codeF"]?>"/> <span class="Err"><?= isset($erreur["CodeF"])? $erreur["CodeF"]:"" ?> </span>


Entrez l'intitulé:
<input  type="text"  name="Intitule" size = "50" value="<?= isset($_POST["IntituleF"])?$_POST["IntituleF"]:$data["IntituleF"]?>" /> <span class="Err"><?= isset($erreur["IntituleF"])? $erreur["IntituleF"]:"" ?> </span>



<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />
</pre>
</form>