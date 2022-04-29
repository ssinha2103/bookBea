<?php include_once 'dbfun.php';
$data=single("products","prodid='{$_GET["prodid"]}'");
?>
<div class="row">
    <div class="col-lg-5">
        <!-- Product Details Slider Big Image-->
        <div class="product-details-slider">
            <div>
                <div class="single-slide" style="width:300px;height:350px; display: inline-block;">
                    <img src="books/<?= $data["photo"] ?>" height="100%" alt="">
                </div>
            </div>
        </div>


    </div>
    <div class="col-lg-7 mt--30 mt-lg--30">
        <div class="product-details-info pl-lg--30 ">                                            
            <h3 class="product-title"><?= $data["pname"] ?></h3>
            <ul class="list-unstyled">
                <li>Author: <span class="list-value"><?= $data["author"] ?></span></li>
                <li>Publisher: <a href="#" class="list-value font-weight-bold">
                        <?= $data["publisher"] ?> <?= $data["year"] ?></a></li>
                <li>Product Code: <span class="list-value"><?= $data["prodid"] ?></span></li>                                                
                <li>Availability: <span class="list-value"> In Stock</span></li>
            </ul>
            <div class="price-block">
                <span class="price-new"><?= $data["disc_price"] ?></span>
                <del class="price-old"><?= $data["price"] ?></del>
            </div>
            <div class="rating-widget">
                <div class="rating-block">
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star star_on"></span>
                    <span class="fas fa-star "></span>
                </div>
                <div class="review-widget">
                    <a href="">(1 Reviews)</a> <span>|</span>
                    <a href="">Write a review</a>
                </div>
            </div>
            <article class="product-details-article">
                <h4 class="sr-only">Product Summery</h4>
                <p>Long printed dress with thin adjustable straps. V-neckline
                    and wiring under the Dust with ruffles at the bottom
                    of the
                    dress.</p>
            </article>
            <form action="addtocart.php">
                <div class="add-to-cart-row">
                    <div class="count-input-block">
                        <span class="widget-label">Qty</span>
                        <input type="hidden" name="prodid" value="<?= $data["prodid"] ?>">
                        <input type="number" name="qty" class="form-control text-center" value="1">
                    </div>
                    <div class="add-cart-btn">
                        <button class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</button>
                    </div>
                </div>
            </form>
            <div class="compare-wishlist-row">
                <a href="wishlist.php" class="add-link"><i class="fas fa-heart"></i>Add to
                    Wish List</a>                                                
            </div>
        </div>
    </div>
</div>