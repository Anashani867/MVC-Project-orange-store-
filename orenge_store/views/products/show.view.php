<?php require  'views/partials/header.php'; ?>
<main class=" container m-4">
    <h1>products</h1>
    <? foreach($products as $product) : ?>
        <h1><?php echo $product['name'] ?></h1>
        <?php endforeach;?>

</main>
<?php require  'views/partials/footer.php'; ?>