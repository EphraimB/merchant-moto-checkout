<?php

$orderid = $_POST['orderid'];
$username = $_POST['username'];
$password = $_POST['password'];
$cardholder_auth = $_POST['cardholder_auth'];
$amount = $_POST['amount'];
$order_description = $_POST['order_description'];
$ccnumber = $_POST['ccnumber'];
$ccexp = $_POST['ccexp'];
$eci = $_POST['eci'];
$cavv = $_POST['cavv'];
$xid = $_POST['xid'];
$status = $_POST['status'];

function doSale($amount, $ccnumber, $ccexp,$status=null, $xid=null,$eci=null,$cavv=null) {
  $orderid = $_POST['orderid'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cardholder_auth = $_POST['cardholder_auth'];

$query  = "";
// Login Information
$query .= "username=" . urlencode($username) . "&";
$query .= "password=" . urlencode($password) . "&";
// Sales Information
$query .= "ccnumber=" . urlencode($ccnumber) . "&";
$query .= "ccexp=" . urlencode($ccexp) . "&";
$query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
// Billing Information
  $query .= "cardholder_auth=" . urlencode($cardholder_auth) . "&";


if ($xid) {
    $query .= "xid=" . urlencode($xid) . "&";
}
if ($eci) {
    $query .= "eci=" . urlencode($eci) . "&";
}
if ($cavv) {
    $query .= "cavv=" . urlencode($cavv) . "&";
}

// Shipping Information
$query .= "type=sale";
return _doPost($query);
}


function _doPost($query) {
    $responses = array();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://paay.transactiongateway.com/api/transact.php");
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    curl_setopt($ch, CURLOPT_POST, 1);

    if (!($data = curl_exec($ch))) {
        return ERROR;
    }
    curl_close($ch);
    unset($ch);
    print "\n$data\n";
    $data = explode("&",$data);
    for($i=0;$i<count($data);$i++) {
        $rdata = explode("=",$data[$i]);
        $responses[$rdata[0]] = $rdata[1];
    }
    return $responses['response'];
}

if($_POST['status'] == 'N') {
    //proceed without 3DSecure
    echo 'NO 3D Secure';
} else {

    $result = doSale(1,$ccnumber,$ccexp,$status,$xid,$eci,$cavv);
    var_dump($result);
}
?>
