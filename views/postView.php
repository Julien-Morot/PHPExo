<!-- Titre de la page -->
<?php $title = $post->getTitle() ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<!-- Billet -->
<div class="LastPost">
<h4><?php echo html_entity_decode($post->getTitle()) ?></h4>
</div>
<div class="trait"></div>
<p>Publié le : <?php echo $post->getAddedDatetime() ?><br>
<?php echo html_entity_decode($post->getAuthor()) ?></p>
<p><?php echo html_entity_decode($post->getContent()) ?></p>
<hr>



<?php $content = ob_get_clean(); ?>

<!-- Requiert le fichier template.php -->
<?php require('views/template.php'); ?>