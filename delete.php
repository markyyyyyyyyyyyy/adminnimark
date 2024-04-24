<?php 
require 'configs/config.php';
if(isset($_POST['delete'])){
    $deleteid = $_POST['deleteid'];

    $querydelete = "DELETE FROM appointments WHERE id = $deleteid";
    $sqldelete = mysqli_query($conn, $querydelete);

    echo '<script>alert("successfully deleted!")</script>';
    echo '<script>window.location.href = "admin-dashboard.php"</script>';
}

?>