

<div class="main">
	<?php if(!is_null($filiere)) { ?>
	 <h1>liste d'étudiant de la filiere <?php echo $filiere; ?></h1>
	 <hr/>
	 <h2>nombre d'étudiant de la filiere <?php echo $filiere." est ".$e_NB ?></h2>
	 <?php }else{ ?> 
		 	<h1>liste d'étudiant de toute les filieres <?php echo $filiere; ?></h1>
		 	<hr/>
		 	<h2>nombre d'étudiant de toute les filieres <?php echo $filiere." est ".$e_NB ?></h2>
	 <?php }?>
	 <h2> la meilleur note est <?php echo $note_max; ?></h2>
	 					<hr>
	 <center>
	  <form action="index.php?module=etudiant&action=listeAjax" method="post">
	 	<b>Filière: </b><select   name="codeF" onchange="getStudentWithAjax('index.php?module=etudiant&action=listeAjax&codeF='+this.value, 'zoneAjax')"> 
	 		<!-- "getStudentWithAjax('index.php?module=etudiant&action=listeAjax&codeF=' + this.value, 'zoneAjax')"  alertTest-->

    	<option value=""  >toute les filieres</option>

    	<?php 
      foreach ($filieres as $f) 
      {
      	$select = ($filiere == $f['codeF']) ? "selected" : " ";
        echo "<option value=\"".$f['codeF']."\" $select >".$f['IntituleF']."</option>";
      }
    ?>
    <input type="submit" hidden name=""></ins>
	  </form>

	 <div id="zoneAjax">
	 	<?php 
    	require('vListeInner.php');
    	?>
	</div>
	</center>
	 
	
