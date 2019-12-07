<!-- Titre de la page -->
<?php  ini_set('display_errors', 1);
 ?>
<!-- Contenu de la page -->
<?php ob_start(); ?>

<!-- Billet -->
<p>Couco<?php echo html_entity_decode($Factures->getMontant()) ?>u</p>




<?php $content = ob_get_clean(); ?>

<!-- Requiert le fichier template.php -->
<?php require('views/template.php'); ?>