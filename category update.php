<?php 

include "connect.php";

    if (isset($_POST['update'])) {

        $Category_id = $_POST['category_id'];

        $Category_name = $_POST['category_name'];

        $Category_Description = $_POST['category_description'];

        $sql = "UPDATE `Categories` SET `category_name`='$Category_Name',`category_description`='$Category_Description' WHERE `category_id`='$Category_Id'"; 

        $result = $connection->query($sql); 

        if ($result == TRUE) {

            echo "Category updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $connection->error;

        }

    } 

if (isset($_GET['id'])) {

    $Category_Id = $_GET['id']; 

    $sql = "SELECT * FROM `Categories` WHERE `id`='$Category_Id'";

    $result = $connection->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Category_Id = $row['id'];

            $Category_Name = $row['category_name'];

            $Category_Description = $row['category_description'];

        } 

    ?>

        <h2>Category Update Form</h2>

        <form method="post">

          <fieldset>

            <legend>Category Update Form :</legend>

            Category_name:<br>

            <input type="text" name="category_name" value="<?php echo $Category_Name; ?>">

            <input type="hidden" name="	category_id" value="<?php echo $Category_Id; ?>">

            <br>

            Category_Description:<br>

            <input type="text" name="category_description" value="<?php echo $Category_Description; ?>">

            <br>


            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: category view.php');

    } 

}

?>