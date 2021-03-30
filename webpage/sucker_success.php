<?php
    $init_func = function($name, $section, $card, $payment) {


?>


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

<?php
    };

    return $init_func;
    ?>