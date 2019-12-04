<?php $title = 'Dernier chapitre'; ?>
<?php ob_start(); ?>

<div class="LastPost">
<h1>Bienvenue sur le site</h1>
</div>
<div class="trait"></div>
<div class="hompage">
<h2 class="text-align: center;">Bienvenue chez Dev_Expert</h2>
<p>Spécialisée dans l'expertise et dans l'audit informatique des plateformes d'entreprises et dans l'installation de solutions innovantes.</p>
<p>Que vous soyez client, expert, ou simple collaborateur, accédez à notre plateforme et lancez votre carrière</p>
<a href="?controller=UserController&action=loginAction" class="btn btn-default">Se connecter</a>
<a href="?controller=UserController&action=registerAction" class="btn btn-default">S'inscrire</a>
</div><br> <br>
<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>
