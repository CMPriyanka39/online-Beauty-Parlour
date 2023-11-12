<?php
// Connect to the database
$con = mysqli_connect('localhost', 'root', '', 'bpmsdb');

// Retrieve the images from the database
$sql = "SELECT * FROM cprod";
$result = mysqli_query($con, $sql);

// Display the images
while ($row = mysqli_fetch_array($result)) {
    echo '<img src="images/' . $row['image'] . '" alt="' . $row['name'] . '" />';
}

// Close the database connection
mysqli_close($con);
?>