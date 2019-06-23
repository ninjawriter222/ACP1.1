<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
 header('location: /acme/index.php');
 exit;
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Acme| Category</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/ACME/public_html/css/style.css" type="text/css" rel="stylesheet" media="screen">
        
    </head>
    <body id="background">
        <div id="white">
        <header>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/header.php'; ?>        
        </header>
        <main>
            <div class="login">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <h1>Add Category</h1>
                <form action="/ACME/products/index.php?action=addNewCategory" method="post">
                    <input type="text" name="categoryname" <?php if(isset($categoryname)){echo "value='$categoryname'";} ?> required />
                    <br>
                    <button type='submit' >Add Category</button>
                </form>
            </div>
        </main>
</body>
        <footer>
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php';
            ?>
        </footer>
    
</html>
