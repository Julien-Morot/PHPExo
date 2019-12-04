<h4>Liste des demandes</h4>
<br />
<br />
<!-- Tableau DESKTOP -->
<table class="table table-striped table-hover" id="onlinePosts">
    <thead>
    <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Titre</th>
        <th class="text-center">Date de publication</th>
    </tr>
    </thead>
    <?php
    foreach ($posts as $post)
    {
        ?>
        <tbody align="center">
        <tr>
            <td><?= $post->getId() ?></td>
            <td><a href="?controller=PostController&action=showAction&id=<?= $post->getId() ?>"
                   title="Lire le billet"><?= (html_entity_decode($post->getTitle())) ?></a></td>
            <td><?= $post->getAddedDatetime() ?></td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
<!-- Tableau RESPONSIVE -->
<?php
foreach ($posts as $post)
{
    ?>
    <div class="panel-group" id="accordionPosts">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse<?= $post->getId() ?>"><?= $post->getTitle() ?></a>
                </h4>
            </div>
            <div id="collapse<?= $post->getId() ?>" class="panel-collapse collapse">
                <div class="panel-body">
                    <a href="?controller=PostController&action=showAction&id=<?= $post->getId() ?>" title="Lire le billet">Lire le billet</a>
                </div>
                <div class="panel-body">
                    Ajouté : <?= $post->getAddedDatetime() ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<hr>