<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "laptopselling";
// connect to the database
$conn = mysqli_connect($host, $user, $password, $db);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// check if the form has been submitted
if (isset($_POST['submit']) && isset($_POST['casubmit'])) {

    // get the form data
    $categoryName = $_POST['categoryName'];
    $categoryDescription = $_POST['categoryDescription'];

    // validate the form data
    if (empty($categoryName) || empty($categoryDescription)) {
        echo "Please fill all the fields";
    } else {
        // insert the category data into the database
        
        $sql = "INSERT INTO categorie_add (cate_id,cate_name,cate_desc) VALUES (Null,'".$categoryName."','".$categoryDescription."')";
        mysqli_query($conn, $sql);
    }


    // close the database connection
}
?>





<?php


// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Execute a SELECT query to fetch data from the "categories" table
$sql1 = 'SELECT * FROM categorie_add';
$result = mysqli_query($conn, $sql1);

// Check if the query was successful
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Display the fetched data in an HTML table
echo '<div class="container">';
echo '<h1>View Categories</h1>';
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Name</th>';
echo '<th>Description</th>';
echo '<th>Action</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['cate_id'] . '</td>';
    echo '<td>' . $row['cate_name'] . '</td>';
    echo '<td>' . $row['cate_desc'] . '</td>';
    echo '<td>';
    echo '<a href="#" class="btn btn-sm btn-primary">Edit</a>';
    echo '<a href="#" class="btn btn-sm btn-danger">Delete</a>';
    echo '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';

// Close the database connection
mysqli_close($conn);
?>


