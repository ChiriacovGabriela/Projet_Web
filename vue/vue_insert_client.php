
<h2>Insertion d'un client</h2>

<br />

<form method="post" class="form-inline">
	<table class="table table-striped table-dark">
		<tr>
				<td>Nom</td>
				<td><input type="text" name="nom_c" value="<?php if($leClient != null) echo $leClient['nom_c']; ?>">
				</td>
				<td>Prenom</td>
				<td><input type="text" name="prenom_c" value="<?php if($leClient != null) echo $leClient['prenom_c']; ?>">
				</td>
		</tr>
				<td>Sexe</td>
				<td colspan="3">
					<select name="sexe">
					<option value="0" <?php if (isset($leClient['sexe']) && $leClient['sexe']==0) echo 'selected="selected"' ?>>femme  </option>
					<option value="1" <?php if (isset($leClient['sexe']) && $leClient['sexe']==1) echo 'selected="selected"' ?>>homme </option>

				</select></td>
				<tr>
				<td>Civilité</td>
				<td><select name="civilite">
					<option value="madame"> Madame </option>
					<option value="monsieur"> Monsieur </option>

				<td></td>
				<td></td>
		</tr>
				
		<tr>
				<td>Telephone</td>
				<td><input type="text" name="tel_c" value="<?php if($leClient != null) echo $leClient['tel_c']; ?>">
				</td>
				<td>Adresse mel</td>
				<td><input type="email" name="mail_c" value="<?php if($leClient != null) echo $leClient['mail_c']; ?>">
				</td>
		</tr>
		<tr>
				<td>Date de naissance</td>
				<td><input type="date" name="date_naiss_c" value="<?php if($leClient != null) echo $leClient['date_naiss_c']; ?>">
				</td>
				<td>Numero de rue</td>
				<td><input type="text" name="numero_c" value="<?php if($leClient != null) echo $leClient['numero_c']; ?>">
				</td>
		</tr>
		<tr>
				<td>Rue</td>
				<td><input type="text" name="rue_c" value="<?php if($leClient != null) echo $leClient['rue_c']; ?>">
				</td>
				<td>Code postal</td>
				<td><input type="text" name="cp_c" value="<?php if($leClient != null) echo $leClient['cp_c']; ?>">
				</td>
		</tr>
		<tr>
				<td>Ville</td>
				<td><input type="text" name="ville_c" value="<?php if($leClient != null) echo $leClient['ville_c']; ?>">
				</td>
				<td>Mot de passe</td>
				<td><input type="password" name="mdp_c" value="<?php if($leClient != null) echo $leClient['mdp_c']; ?>">
				</td>
		</tr>

		<tr>
				<td></td><td><input type="reset" name="Annuler" value="Annuler" class="btn btn-danger"></td>
				<?php 
			
					if ($leClient != null )
					{
			
					
					
					
						echo '<td><input type="submit" name="Valider" value="Valider" class="btn btn-success">';
					
				
				
					echo '<td><input type="submit" name ="Modifier" value="Modifier" class="btn btn-secondary">'; }
				
				?>
				</td><td></td>
		</tr>		
	</table>
</form>
