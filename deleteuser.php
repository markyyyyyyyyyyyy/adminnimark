<?php 
require 'configs/config.php';
if(isset($_POST['deletee'])){
    $deleteidd = $_POST['deleteeid'];

    $querydeletee = "DELETE FROM users WHERE id = $deleteidd";
    $sqldeletee = mysqli_query($conn, $querydeletee);

    echo '<script>alert("successfully deleted!")</script>';
    echo '<script>window.location.href = "admin-dashboard.php"</script>';
}

?>