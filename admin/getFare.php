<?php 
if(isset($_POST['amount'])){
    include '../database/config.php';
    $route =intval($_POST["amount"]);
$sql = "SELECT * FROM routes WHERE id='$route'";
$routes = $conn->query($sql);
                while ($row = $routes->fetch_assoc()) {
                    $fare = $row["amount"];
                    echo $fare;
                }
}else{
    echo "Nothing selected.";
}