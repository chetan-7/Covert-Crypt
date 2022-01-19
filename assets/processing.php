

<?php
$target_dir = "users/".$loggedin_session."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filename = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
 $path1 = $target_file;

$string = file_get_contents($path1);

$i = 0; $len = strlen($string)/3; $bits = array();
while($i < strlen($string)) {
    $bits[] = substr($string, $i, $len);
    $i += $len;
}
$aes = $bits[0];
$des = $bits[1];
$rc6 = $bits[2];
//====================================Encryption AES starts here =========================
        
    function fnEncrypt($sValue, $sSecretKey) {
    global $iv;
    return rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $sSecretKey, $sValue, MCRYPT_MODE_CBC, $iv)), "\0\3");
}
        
        function fnDecrypt($sValue, $sSecretKey) {
    global $iv;
    return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $sSecretKey, base64_decode($sValue), MCRYPT_MODE_CBC, $iv), "\0\3");
}
?>
