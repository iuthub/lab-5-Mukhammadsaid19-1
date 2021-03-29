<?php
    $name = $_POST["name"];

    if (isset($_POST["name"])) {

    }

    $section = $_POST["section"];
    $card = $_POST["card"];
    $payment = $_POST["payment"];

    $all_info = array($name, $section, $card, $payment);

    file_put_contents("suckers.txt", implode(";", $all_info) . "\n", FILE_APPEND);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Thanks, sucker!</h1>

<p>
Your information has been recorded.
</p>

    <dl>
        <dt>Name</dt>
        <dd>
            <?= $name ?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?= $section ?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?= "{$card} ({$payment})" ?>
        </dd>
    </dl>

    <p>Here are all the suckers who have submitted here:</p>
<?php
        $text = file_get_contents("suckers.txt");
        ?>
<pre><?= $text ?></pre>
</body>
</html>