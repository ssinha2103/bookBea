<?php
include_once 'dbfun.php';

$orderid = $_GET["orderid"];
?>
<h4>Details of Order with Order Id <?= $orderid ?></h4>

<table class="table">
    <!-- Head Row -->
    <thead>
        <tr>
            <th class="pro-remove">Sr.No.</th>
            <th class="pro-thumbnail">Image</th>
            <th class="pro-title">Product</th>
            <th class="pro-price">Price</th>
            <th class="pro-quantity">Quantity</th>
            <th class="pro-subtotal">Total</th>
        </tr>
    </thead>
    <tbody>
        <!-- Product Row -->
        <?php
        $count = 1;
        foreach (alldatasql("select * from order_details c left join products p on p.prodid=c.prodid where order_id='$orderid'") as $r) {
            ?>
            <tr>
                <td class="pro-remove">
                    <?= $count++ ?>
                </td>
                <td class="pro-thumbnail"><a href="#">
                        <img src="books/<?= $r["photo"] ?>" style="width:60px;" alt="Product"></a></td>
                <td class="pro-title"><a href="#"><?= $r["pname"] ?></a></td>
                <td class="pro-price"><span><?= money($r["disc_price"]) ?></span></td>
                <td class="pro-price"><?= $r["qty"] ?></td>                
                <td class="pro-subtotal"><span><?= money($r["disc_price"] * $r["qty"]) ?></span></td>
            </tr>
            <!-- Product Row -->
            <a class="btn btn--primary float-right" href='invoice.php?orderid=<?= $orderid ?>, _blank'>Download Invoice</a> 
        <?php } ?>

    </tbody>
</table>
<?php if ($_SESSION["role"] == "Admin") { ?>   
<a class="btn btn--primary float-right" href="change-order-status.php?oid=<?= $orderid ?>&st=y">Confirm Order</a>      
<?php } else { ?>
 <a class="btn btn-danger float-right mr-2" href="change-order-status.php?oid=<?= $orderid ?>&st=x">Cancel Order</a> 
<?php } ?>

