<?php
require 'vendor/autoload.php';
$latte = new Latte\Engine;
?>
<!DOCTYPE html>
<html>

<body>

    <h1>POC latte</h1>

    <?php
    $parameters['items'] = array('one', 'two', 'three');
    $html = $latte->renderToString('template.latte', $parameters);
    echo $html;
    ?>
    <br>
    <?php
    $html = $latte->renderToString('template2.latte', $parameters);
    echo $html;
    ?>
    <br>
    <?php
    $parameters1 = array(
        'boolean' => false,
        'boolean1' => false,
    );
    $html = $latte->renderToString('template1.latte', $parameters1);
    echo $html;
    ?>
</body>

</html>