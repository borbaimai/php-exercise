<?php

$total = 0;
$change = 0;

if (!empty($_POST['hour'])) {
    $hour = $_POST['hour'];
    $total = $hour * 250;
}

if (!empty($_POST['pay'])) {
    $pay = $_POST['pay'];
    $total = $_POST['total'];
    $change = $pay - $total;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Fee</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="hour">Hour : </label>
            <input type="text" name="hour">
            <input type="submit" value="submit">
        </div>
    </form>

    <h1>Result</h1>
    <label>Total : </label><?php echo $total; ?>

    <?php if ($total>0) { ?>

    <form action="" method="post">
        <input type="hidden" name="total" value="<?php echo $total; ?>">
        <div>
            <label for="pay">Pay : </label>
            <input type="text" name="pay">
            <input type="submit" value="submit">
        </div>
    </form>

    <h1>Change</h1>
    <label>Change Money : </label><?php echo $change; ?>

    <?php } ?>

    
    
</body>
</html>