<?php
include 'db_conn.php';
if (isset($_POST['apply_points'])) {
    $customerId = 1;
    $grantTotal = $_POST["grantTotal"];
    $use_points = $_POST["use_points"];
    $card_bal = $_POST["card_bal"];
    $avl_bal = $card_bal - $use_points;
    $new_grantTotal = $grantTotal - $use_points;

    

    echo 'Grant Total:'. $grantTotal;
    echo 'Use Points:'. $use_points;
    echo 'Card Balance:'. $card_bal;
    echo 'Available Card Balance:'.$avl_bal;
    echo 'New Grant Total:'.$new_grantTotal;
}
