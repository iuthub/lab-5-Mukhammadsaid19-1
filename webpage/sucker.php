<?php
    $is_validated = true;
    if (isset($_POST["name"]) and isset($_POST["card"]) and isset($_POST["payment"])) {
        if ($_POST["name"] == "" | $_POST["card"] == "" | $_POST["payment"] == "") {
            $is_validated = false;
        }
    }

    $name = $_POST["name"];
    $section = $_POST["section"];
    $card = $_POST["card"];
    $payment = $_POST["payment"];

    $all_info = array($name, $section, $card, $payment);

    file_put_contents("suckers.txt", implode(";", $all_info) . "\n", FILE_APPEND);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<?php
$testing = $is_validated ? require('sucker_success.php') : require('sucker_fail.php');
$testing($name, $section, $card, $payment);
?></html>