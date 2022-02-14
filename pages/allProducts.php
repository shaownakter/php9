<?php include 'pages/include/header.php' ?>
<section class="">
    <div class="container">
        <div class="row">
            <?php foreach ($products as$product) { ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="<?php echo $product ['image'] ?>" alt="" class="card-img-top" style="height: 250px">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $product['name']?></h3>
                        <p class=""><?php echo $product['price']?></p>
                        <p class="text-justify"><?php echo $product['description']?></p>
                        <a href="action.php?pages=product-details&&product_id=<?php echo $product['id']; ?>" class="btn btn-outline-warning float-right">View</a>

                    </div>

                </div>

            </div>
            <?php } ?>

        </div>

    </div>

</section>
<?php include 'pages/include/footer.php' ?>
