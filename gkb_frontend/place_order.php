<?php
include 'db_conn.php';
if (isset($_POST['place_order'])) {
    // $customerId = 1;
    // $_SESSION['cartdata'] = $_POST;
    // $first_purchase = $grantTotal;
    // $card_bal = 80 / 100 * $grantTotal;
    // $withdrawal_bal = $grantTotal - $card_bal;

    // echo $grantTotal;
    // echo $card_bal;
    // echo $withdrawal_bal;

    //     $duplicateQuery = "SELECT * FROM prime_members WHERE user_id = '$customerId'";
    //     $duplicateResult = mysqli_query($conn, $duplicateQuery);
    //     if (mysqli_num_rows($duplicateResult) == 0) {
    //         $insert_qry = "INSERT INTO prime_members (user_id, first_purchase, card_bal, withdrawal_bal)
    // VALUES ('$customerId', '$first_purchase', '$card_bal', '$withdrawal_bal')";
    //         $result = mysqli_query($conn, $insert_qry);
    //         if ($result) {
    //             $deleteQuery = "DELETE FROM `cart` WHERE `user_id` = '$customerId'";
    //             $result = mysqli_query($conn, $deleteQuery);
    //             if ($result) {
    //                 echo 'Data Inserted';
    //             }
    //         }
    //     } else {
    //         echo 'Order Placed';
    //     }


    //     header('location:checkout.php');


    $odrId = 'OD' . date('ymdhi') . mt_rand(1000, 9999);
    $id_cust = 1;
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $amount_paid = $_POST['grant_total'];
    $pmode = $_POST['pmode'];
    $status = "Complete";

    echo $odrId;
    echo $id_cust;
    echo $fullname;
    echo $mobile;
    echo $pmode;
    echo $amount_paid;
    echo $address;

    header('location:successful.php');
}
