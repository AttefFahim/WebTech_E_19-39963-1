 <?php 
    require("../models/data-model.php");
    if(isset($_GET["id"])){ 
        $row = showProduct($_GET["id"]);
?>
<p>Prodct No: <?php echo $row["SL"]; ?></p>
<p>Name: <?php echo $row["Name"]; ?></p>
<p>Buying Price: <?php echo $row["buying_price"]; ?></p>
<p>Selling Price: <?php echo $row["selling_price"]; ?></p>

<form action="../controls/product-delete-control.php" method="post">
    <input type="hidden" name="serial" value="<?php echo $row["SL"]; ?>">
    <hr>
    <input type="submit" name="delete" value="Delete">
</form>
<?php }else{
    header("location: list-product-view.php");
} ?>
<a href="../index.php">Home Page</a>
