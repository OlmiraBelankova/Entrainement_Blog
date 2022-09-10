<?php 
include "../inc/headHeader.tpl.php";
include "../data/articles.php";
$numeroart=$_GET["article"];
$article=$articles[$numeroart-1];
include "../inc/article.tpl.php";
$nombreTotal=count($articles);
include "../function/function.php";
include "../inc/proposition.tpl.php";
include "../inc/footer.tpl.php";
?>
