<?php 

include "connect.php";

    if (isset($_POST['update'])) {

        $Product_Id = $_POST['product_id'];

        $Product_Name = $_POST['product_name'];

        $Product_Description = $_POST['product_description'];

        $Product_Price = $_POST['product_price'];
        

        $sql = "UPDATE `Products` SET `product_name`='$Product_Name',`product_description`='$Product_Description', `product_price `='$Product_Price'  WHERE product_id`='$Product_Id'"; 

        $result = $connection->query($sql); 

        if ($result == TRUE) {

            echo "Product updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $connection->error;

        }

    } 

if (isset($_GET['id'])) {

    $Product_Id = $_GET['id']; 

    $sql = "SELECT * FROM `Products` WHERE `id`='$Product_Id'";

    $result = $connection->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Product_Id = $row['id'];

            $Product_Name = $row['product_name'];

            $Product_Description = $row['product_description'];

            $Product_Price = $row['product_price'];

        } 

    ?>

        <h2>Product Update Form</h2>

        <form method="post">

          <fieldset>

            <legend>Product Update Form :</legend>

            Product_name:<br>

            <input type="text" name="product_name" value="<?php echo $Product_Name; ?>">

            <input type="hidden" name="product_id" value="<?php echo $Product_Id; ?>">

            <br>

            Product_Description:<br>

            <input type="text" name="product_description" value="<?php echo $Product_Description; ?>">

            <br>
 
            Product_price:<br>

            <input type="text" name="product_price" value="<?php echo $Product_Price; ?>">
            <br>


            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: product view.php');

    } 

}

?>