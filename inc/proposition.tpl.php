<section class="propositions">
<?php
?>
<p>Lire aussi : 

<?php 
foreach ($tableauFinRec as $artRec):
?>

    <a href="article.php?article=<?=$artRec?>"><?=$articles[$artRec-1]["titre"]?></a>
<?php endforeach ?>

    </p>
</section>