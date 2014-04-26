<?php 
	include_once("includes/header.php");
?>
<div id='wrapper_content'>
    <div class='twocolumnarea'><?php echo $siteFunctions->storeLocator("Zoek een filiaal","Vul hier je woonplaats hier!", "storelocator", "searchtagg");?></div>
    <div class='twocolumnarea'><?php echo $siteFunctions->search("Zoek een product","", "search", "searchname", "categorie");?></div>
    <div class='clearfix'></div>
</div>
<?php 
	include_once("includes/footer.php");
?>