<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portland Historical Tour Reservations</title>
        <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../project.css>
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
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                    <strong>Tour:</strong> <?php echo htmlspecialchars($tour, ENT_QUOTES); ?><br>
                    <strong>First Name</strong> <?php echo htmlspecialchars($myfname, ENT_QUOTES); ?><br>
                    <strong>Last Name:</strong> <?php echo htmlspecialchars($mylname, ENT_QUOTES); ?><br>
                    <strong>Email:</strong> <?php echo htmlspecialchars($myemail, ENT_QUOTES); ?><br>
                    <strong>Phone:</strong> <?php echo htmlspecialchars($myphone, ENT_QUOTES); ?><br>
                    <strong>Tour Date:</strong> <?php echo htmlspecialchars($mydate, ENT_QUOTES); ?><br>
                    <strong>Number of participants:</strong> <?php echo htmlspecialchars($mygroup, ENT_QUOTES); ?><br>
                    <strong>Sensitivities:</strong> <?php echo htmlspecialchars($mycomments, ENT_QUOTES); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>
