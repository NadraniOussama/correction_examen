<h1>Liste des etudiants resussis</h1>
<form method="post">
Filiere: <section name="CodeF" onchange="getStudentWithAjax('index.php?module=etudiant&action=listeAjax&codeF='+this.value, 'zoneAjax')">
	<?php foreach ($filieres as $f) {?>
		<option value="<?=$f['CodeF']?>"><?=$f['IntituleFiliere']?></option>
	<?php }?>
	</section>
</form>
<div class="zoneAjax">
	<?php  require "Views/vInner.php"; ?>
</div>