<!-- Titre de la page -->
<?php $title = 'Administration'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>
<div class="title">
<h1>Commercial</h1>
</div>
<hr>
<br/>

<!-- Liste des billets en ligne -->
<?php
    include 'inc/_onlinePosts.php';
?>
<br />
<?php
    include 'inc/_departementList.php';
?>
<br />


<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>
