<?php include_once "header.php"; ?>
<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Checkout Form s-->
                <div class="checkout-form">
                    <form action="placeorder.php" method="post">
                        <div class="row row-40">
                            <div class="col-12">
                                <h1 class="quick-title">Checkout</h1>                           
                            </div>
                            <div class="col-lg-7 mb--20">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Billing Address</h4>
                                    <div class="row">
                                        <div class="col-12 mb--20">
                                            <label>Full Name*</label>
                                            <input type="text" name="name" placeholder="First Name" value="<?= $_SESSION["uname"] ?>">
                                        </div>                                                                                                                        
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            <input type="email" name="userid" placeholder="Email Address" value="<?= $_SESSION["userid"] ?>">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            <input type="text" name="phone" placeholder="Phone number">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            <input type="text" name="line1" placeholder="Address line 1">
                                            <input type="text" name="line2" placeholder="Address line 2">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Town/City*</label>
                                            <input type="text" name="city" placeholder="Town/City">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>State*</label>
                                            <input type="text" name="state" placeholder="State">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Zip Code*</label>
                                            <input type="text" name="zip" placeholder="Zip Code">
                                        </div>
                                        <div class="col-12 col-12 mb--20">
                                            <label>Country*</label>
                                            <select class="nice-select" name="country" style="display: none;">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                            <div class="nice-select" tabindex="0"><span class="current">Bangladesh</span>
                                                <ul class="list">
                                                    <li data-value="Bangladesh" class="option selected">Bangladesh</li>
                                                    <li data-value="China" class="option">China</li>
                                                    <li data-value="country" class="option">country</li>
                                                    <li data-value="India" class="option">India</li>
                                                    <li data-value="Japan" class="option">Japan</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 mb--20 ">
                                            <div class="block-border check-bx-wrapper">                                                
                                                <div class="check-box">
                                                    <input type="checkbox" id="shiping_address" data-shipping="">
                                                    <label for="shiping_address">Ship to Different Address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Shipping Address -->
                                <div id="shipping-form" class="mb--40">
                                    <h4 class="checkout-title">Shipping Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Full Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>                                        
                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address line 1">
                                            <input type="text" placeholder="Address line 2">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Country*</label>
                                            <select class="nice-select" style="display: none;">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select><div class="nice-select" tabindex="0"><span class="current">Bangladesh</span><ul class="list"><li data-value="Bangladesh" class="option selected">Bangladesh</li><li data-value="China" class="option">China</li><li data-value="country" class="option">country</li><li data-value="India" class="option">India</li><li data-value="Japan" class="option">Japan</li></ul></div>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Town/City*</label>
                                            <input type="text" placeholder="Town/City">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Zip Code*</label>
                                            <input type="text" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-note-block mt--30">
                                    <label for="order-note">Order notes</label>
                                    <textarea id="order-note" cols="30" rows="10" class="order-note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <!-- Cart Total -->
                                    <div class="col-12">
                                        <div class="checkout-cart-total">
                                            <h2 class="checkout-title">YOUR ORDER</h2>
                                            <h4>Product <span>Total</span></h4>
                                            <ul>
                                                <?php
                                                $total = 0;
                                                foreach (alldatasql("select * from cart c left join products p on p.prodid=c.prodid where userid='$userid'") as $r) {
                                                    $total += $r["qty"] * $r["disc_price"];
                                                    ?>
                                                    <li><span class="left"><?= $r["pname"] ?> X <?= $r["qty"] ?></span> <span class="right"><?= money($r["qty"] * $r["disc_price"]) ?></span></li>
                                                <?php }
                                                ?>
                                            </ul>
                                            <p>Sub Total <span><?= money($total) ?></span></p>
                                            <p>Shipping Fee <span><?= money(100) ?></span></p>
                                            <h4>Grand Total <span><?= money($total + 100) ?></span></h4>

                                            <div class="term-block">
                                                <input type="checkbox" id="accept_terms2">
                                                <label for="accept_terms2">I’ve read and accept the terms &amp;
                                                    conditions</label>
                                            </div>
                                            <button class="place-order w-100">Place order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once "footer.php"; ?>