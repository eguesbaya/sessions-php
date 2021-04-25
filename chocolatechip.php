<?php require 'inc/data/products.php';?>
<?php require 'inc/head.php';?>
<section class="cookies container-fluid">
    <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?=36;?>.jpg" alt="<?=$catalog[36]['name'];?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?=$catalog[36]['name'];?></h3>
                        <p><?=$catalog[36]['description'];?></p>
                        <a href="?add_to_cart=<?=36;?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
    </div>
</section>
<?php require 'inc/foot.php';?>