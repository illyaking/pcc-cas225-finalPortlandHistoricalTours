<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Portland Historical Tour Options</title>
    <meta name="description" content="Portland Historical Tours have offered three family run tours for decades:  the Downtown Tour, the Growth Tour, and the Landmarks Tour.">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../project.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
        <table class="tours">
            <span id="caption">Compare Tour Options</span>
            <tr>
                <th id="tourname">Tour</th>
                <th id="tourduration">Duration</th>
                <th id="transportation">Transportation</th>
                <th id="food">Food</th>
                <th id="price">Price</th>
                <th class="reserve">Reserve</th>
            </tr>
            <?php foreach ($tourItems as $tourItem): ?>
                <tr>
                    <td headers="tourname"><?php echo htmlspecialchars($tourItem['title'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td headers="tourduration"><?php echo htmlspecialchars($tourItem['duration'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td headers="transportation"><?php echo htmlspecialchars($tourItem['transportation'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td headers="food"><?php echo htmlspecialchars($tourItem['food'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td headers="price">$<?php echo htmlspecialchars($tourItem['price'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td class="reserve"><a href="../reservations.php">Reserve</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php foreach ($tourItems as $tourItem): ?>
        <h1><?php echo htmlspecialchars($tourItem['title'], ENT_QUOTES, 'UTF-8'); ?> Tours</h1>
        <img class="image" src="../<?php echo $tourItem['image']; ?>" width="200" height="200">
        <?php echo $tourItem['description']; ?>
        <?php endforeach; ?>
        <br class="clearright">
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
</body>
</html>
