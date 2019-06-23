<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Acme Category Page</title>
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Poe">
        <meta name="description" content="Describe your web site here">
        <link rel="stylesheet" type="text/css" href="/ACME/public_html/css/style.css">
    </head>
    <body id="background">
        <div id="white">

            <header>
                <?php //include $_SERVER['DOCUMENT_ROOT'].'/ACME/public_html/modules/header.php'; ?>
                <?php //echo $navList; ?>
            </header>
            <nav class="nav">
                <?php echo buildNav(); ?>
            </nav>
            <main>
                <h1><?php echo $type; ?> Products</h1>
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <?php
                if (isset($prodDisplay)) {
                    echo $prodDisplay;
                }
                ?>
            </main>
            <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
