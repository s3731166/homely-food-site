<?php
    session_start();
    $database_name = "register";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                    'time_date' => $_POST["timedate"],

                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
                'time_date' => $_POST["timedate"],

            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>

<?php
    include '../nav-header.php';
    ?>

    <style>
        body{
            text-align:center;
        }
        .product{
            display:inline-block;
            border: 1px solid #eaeaec;
            margin: 5px;
            padding: 30px;
            text-align: center;
            background-color: #efefef;
            width:20%;
            border-radius: 0.7em;
        }
        table, th, tr{
            text-align: center;
        }
        table{
            border-spacing: 0 15px;
        }
        .title2{
            text-align: center;
            color: #5e2804;
            background-color: #ebae85;
            text-align: center;
            font-size: 30px;
            padding: 2%;
        }
        h2{
            color:  #5e2804;
            font: Arial, sans-serif;
            font-size: 50px;
            text-align: center; background-color: antiquewhite;
            opacity: 0.9;
            padding: 1em;
            margin-top: 1em;
            width: 100%;"
        }
        table th{
            background-color: #efefef;
        }
        img{
            height: 200px;
        }
        .container{
            display:inline-block;
            text-align:center; 
        }
        form{
            display: inline;
        }

</style>

<body>

    <div class="container" style="width: 100%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "SELECT * FROM products ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <!-- <div class="col-md-3"> -->

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="../img/food-items/<?php echo $row["image"]; ?>" class="img-responsive">
                                <input type="text" name="quantity" class="form-control" value="1" >
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="date" name="timedate" id="" >
                                <input type="submit" name="add" style="margin-top: 5px; background-color: #f5a26b; font-weight: bold;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    <!-- </div> -->
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="20%" style="font-weight: bold; font-size: 18px; color: #351304;">Product Name</th>
                <th width="10%" style="font-weight: bold; font-size: 18px; color: #351304;">Quantity</th>

                <th width="13%" style="font-weight: bold; font-size: 18px; color: #351304;">Price Details</th>
                <th width="10%" style="font-weight: bold; font-size: 18px; color: #351304;">Time/Day</th>

                <th width="10%" style="font-weight: bold; font-size: 18px; color: #351304;">Total Price</th>
                <th width="17%" style="font-weight: bold; font-size: 18px; color: #351304;">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td style="font-size: 17px;"><?php echo $value["item_name"]; ?></td>
                            <td style="font-size: 17px;"><?php echo $value["item_quantity"]; ?></td>
                            <td style="font-size: 17px;">$ <?php echo $value["product_price"]; ?></td>
                            <td style="font-size: 17px;"> <?php echo $value["time_date"]; ?></td>

                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td style="font-size: 17px;"><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right" style="font-weight: bold; font-size: 20px;">Total</td>
                            <th align="right" style="font-weight: bold; font-size: 20px;">$ <?php echo number_format($total, 2); ?></th>
                            <?php $_SESSION["total"]  = $total?>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
        <form method = "post" action= "checkout.php">
            <input type="submit" value = "Checkout" name="checkout" style="color:#3b1406; font-size: 25px; font-weight: bold; background-color: rgb(207, 114, 48); ">
        </form>
    </div>

    <?php
    include '../footer.php';
?>
