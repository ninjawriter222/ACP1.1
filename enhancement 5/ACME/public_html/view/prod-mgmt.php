<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
 header('location: /acme/index.php');
 exit;
}
 if (isset($_SESSION['message'])) {
 $message = $_SESSION['message'];
}?>
<!--// PRODUCT MANAGEMENT VIEW-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href='../css/style.php' />
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen">
        <title>Acme| Products</title>
    </head>
    <body id="background">
        <div id="white">
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/header.php'; ?>        
        </header>
        <main>
            <div class="login">
                <h1>Product Management</h1>
                <p> Welcome to the product management page. Please choose an option below: </p>
                <ul>
                    <!--//Link to the controller that will trigger the delivery of the add category view.-->
                    <li><a href="../products/index.php?action=addCategory" title="add category">Add new Category</a></li>
                    <!--Link to the controller that will trigger the delivery of the add category view.-->
                    <li><a href="../products/index.php?action=addProduct" title="add a new product">Add new Product</a> </li>
                    <?php
                    if (isset($message)) {
                        echo $message;
                    } if (isset($prodList)) {
                        echo $prodList;
                    }
                    ?>
                </ul>
            </div>
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/footer.php'; ?>
        </footer>
    </body>
</html>
<?php unset($_SESSION['message']); ?>