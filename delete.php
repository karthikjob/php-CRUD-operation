<?php
include "db.php";
$id = $_GET['id'];
$sql = "DELETE FROM store WHERE id =$id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php?msg=Record deleted successfully");
} else {
    echo "Failed: " . mysqli_error($Conn);
}

?>

















































?>