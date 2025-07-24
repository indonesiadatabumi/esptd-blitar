<?php
require_once "koneksi.php";
if (function_exists($_GET['function'])) {
   $_GET['function']();
}
function getPayment()
{
   global $link;
   $sql = "SELECT * FROM payment.v_payment WHERE LENGTH(kode_billing)=11";
   $query = pg_query($link, $sql);
   while ($row = pg_fetch_array($query)) {
      $data[] = $row;
   }
   $response = array(
      'status' => 1,
      'message' => 'Success',
      'data' => $data
   );
   header('Content-Type: application/json');
   echo json_encode($response);
}
