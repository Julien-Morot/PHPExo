<!-- Titre de la page -->
<?php $title = 'Administration'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>
<div class="title">
<h1>Client</h1>
</div>
<hr>
<br/>

<!-- Publier un nouvel article -->
<h4>Publier une Mission</h4>
<br />
<br />
<form action="?controller=AdminController&action=postAction" method="post">
    <label for="title">Titre de la mission:</label></br>

    <input type="text" id="title" name="title" class="form-control"/></br>
    
    <label for="type_mission">Type de Mission :</label></br>

    <select type="text"  id="type_mission" name="type_mission" class="form-control" >
        <option value="">--Choissisez une option--</option>
        <option value="mobile">Application Mobile</option>
        <option value="web">Développement Web</option>
    </select><br>

    <label for="budgetMax">Budget Max :</label></br>

    <input type="text" id="budgetMax" name="budgetMax" class="form-control"/></br>

    <label for="content">Contenu :</label></br>

    <textarea id="content" name="content" cols="30" rows="5" class="mceEditor"></textarea></br>

    <button class="btn btn-primary">Publier</button>
</form>
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
