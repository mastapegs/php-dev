<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="PHP Sandbox">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Hello, World!</h1>
        <p>From php</p>

        <h2>Rendering a list</h2>
        <ul>
            <?php for ($number = 1; $number <= 10; $number++) : ?>
                <li><?= $number ?> - <?= $number ** 2 ?></li>
            <?php endfor ?>
        </ul>
    </div>
</body>

</html>