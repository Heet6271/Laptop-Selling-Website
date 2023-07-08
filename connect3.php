<?php


// connect to the database
$conn = mysqli_connect("localhost", "root", "", "laptopselling");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// check if the form has been submitted
if (isset($_POST['submit']) && isset($_POST['casubmit'])) {

    // get the form data
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productDesc = mysqli_real_escape_string($conn, $_POST['productDesc']);
    $productPrice = mysqli_real_escape_string($conn, $_POST['productPrice']);
    $productComp = mysqli_real_escape_string($conn, $_POST['productComp']);
   // $productImg = mysqli_real_escape_string($conn, $_POST['productImage']);

    // validate the form data
    if (empty('$productName') ||  empty('$productDesc') || empty('$productPrice')  || 
    		empyt('$productComp')) {
        
       header("Location: http://localhost/LPSell/addProduct.php");
        //exit();
   }else {
        // upload product image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["productImage"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                //$_SESSION['error'] = "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            //$_SESSION['error'] = "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["productImage"]["size"] > 500000) {
           // $_SESSION['error'] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          //  $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
           // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            header("Location: add_product.php");
            exit();
        } else {
            if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
                // insert the product data into the database
                $sql = "INSERT INTO add_product (p_id, p_name, p_desc, p_company, p_price, p_img) VALUES (Null, '".$productName."', '".$productDesc."', '".$productComp."', '".$productPrice."', '".$target_file."')";
                if (mysqli_query($conn, $sql)) {
                    //$_SESSION['success'] = "Product added successfully";
                    header("Location:addProducts.php");
                    exit();
                } else {
                   // $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
                    header("Location: addProduct.php");
                    exit();
                }
            } else {
               // $_SESSION['error'] = "Sorry, there was an error uploading your file.";
                header("Location: addProduct.php");
                exit();
            }
        }
    }
}

// close the database connection

?>

<?php


// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Execute a SELECT query to fetch data from the "categories" table
$sql1 = 'SELECT * FROM add_product';
$result = mysqli_query($conn, $sql1);

// Check if the query was successful
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Display the fetched data in an HTML table
echo '<div class="container">';
echo '<h1>View Prodcut</h1>';
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Product Name</th>';
echo '<th>Description</th>';
echo '<th>Comopany</th>';
echo '<th>Price</th>';
echo '<th>Image</th>';
echo '<th>Action</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['p_id'] . '</td>';
    echo '<td>' . $row['p_name'] . '</td>';
    echo '<td>' . $row['p_desc'] . '</td>';
    echo '<td>' . $row['p_company'] . '</td>';
    echo '<td>' . $row['p_price'] . '</td>';
    echo '<td>' . $row['p_img'] . '</td>';
    echo '<td>';
    echo "<td><a href='#'>Edit</a></td>";
    echo "<td><a href='#'>Delete</a></td>";
    echo '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';

// Close the database connection
mysqli_close($conn);
?>
