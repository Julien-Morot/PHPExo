<!-- Titre de la page -->
<?php $title = 'Administration'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>
<div class="title">
<h1>Responsable Réseau et Sécurité</h1>
</div>
<hr>
<br/>

<hr>
<br />

<!-- Liste des billets en ligne -->
<?php
    include 'inc/_onlinePosts.php';
?>
<br />


<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>