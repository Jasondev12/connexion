
<h2>Connexion Cours PHP</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" action="index.php?action=nouveauUser" enctype="multipart/form-data">
			<h1>Créer un compte</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>ou utilise ton email pour t'enregistrer</span>
			<label for="pseudo"></label>
			<input type="pseudo" name="pseudo" placeholder="Pseudo" />
			<label for="password"></label>
			<input type="password" name="password" id="password" placeholder="Mot de passe" />
			<label for="confirm"></label>
			<input type="password" name="confirm" id="confirm" placeholder="Mot de passe" />
			<button type="submit">S'inscrire</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="index.php?action=connect">
			<h1>Se connecter</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>ou utilise ton compte</span>
			<input type="pseudo" name="pseudo" placeholder="Pseudo" />
			<input type="password" name="password" placeholder="Mot de passe" />
			<a href="#">Mot de passe oublié ?</a>
			<a href="index.php?action=nouveauUser">Pas encore inscrit ?</a>

			<button type="submit">Se connecter</button>
</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bon retour parmis nous !</h1>
				<p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
				<button type="submit" class="ghost" id="signIn">Se connecter</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Salut mon ami !</h1>
				<p>Entrez vos détails and commencer la journée avec nous</p>
				<button type="submit" class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
	</div>
</div>
