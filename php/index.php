<?php 
include "../inc/headHeader.tpl.php";
?>
    <main>
        <ul class="articlesenboites">

<?php
include "../data/articles.php";

foreach ($articles as $numeroart => $article) {
?>

            <li>
                <h3>
                    <?=$article["titre"]?>
                </h3>
                <p class="accroche">
                <?=$article["accroche"]?>
                </p>
                <p class="texte">
                <?=$article["texte"]?>
                </p>
                <!--<a class="categories" href="#"><?=$article["categories"]?></a> -->
                <a class="continue" href="article.php?article=<?=$numeroart+1?>">Continuer la lecture</a>
            </li>
<?php 
}
?>
        </ul>
    </main>
<?php 
include "../inc/footer.tpl.php"
?>