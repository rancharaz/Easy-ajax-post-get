<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
    $sname = test_input($_POST['name']);
    $sphone = test_input($_POST['phone']);
    $semail = test_input($_POST['email']);

    
/* link for db */
$url = "http://localhost/ajaxForm/includes/db.inc/db.inc.php";

$ch = curl_init();

/* form to post */
$form_data = array(
    'name' => $sname,
    'phone' => $sphone,
    'email' => $semail
);

$data = http_build_query($form_data);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
} else{
    $decode = json_decode($resp);
 
}
echo $resp;
curl_close($ch);

}