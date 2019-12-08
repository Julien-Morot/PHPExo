<h4>Liste des départements</h4>
<br />
<br />
<!-- Tableau DESKTOP -->
<table class="table table-striped table-hover" id="onlinePosts">
    <thead>
    <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Nom</th>
    </tr>
    </thead>
   
    <?php

    foreach ($posts as $post)
    {
        ?>
        <tbody align="center">
        <tr>
            <td><?= $post->getId() ?></td>
            <td><?= (html_entity_decode($post->getTitle())) ?></td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
