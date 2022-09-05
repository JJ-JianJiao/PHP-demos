<?php

/** @var $pdo \PDO */
require_once "../../database.php";
include_once "../../functions.php";

$errors = [];
$title = '';
$price = '';
$description = '';
$product = [
    'image' => ''
];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once "../../validate_product.php";
    if(empty($errors)){
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
            VALUE (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));
        $statement->execute();
        header('Location:index.php');
    }
}
?>
<?php include_once "../../views/partials/header.php" ?>
<p>
    <a href="index.php" class="btn btn-secondary" >Go Back to Products</a>
</p>
<h1>Create new Product</h1>
<?php include_once '../../views/products/form.php' ?>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>