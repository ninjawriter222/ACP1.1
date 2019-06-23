<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Acme Products Page</title>
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Poe">
        <meta name="description" content="Describe your web site here">
        <link rel="stylesheet" type="text/css" href="/ACME/public_html/css/style.css">
    </head>
    <body id="background">
        <div id="white">

            <header>
                <?php
//Accounts Controller
// Get the database connection file
                require_once '../sql/connections.php';
// Get the acme model for use as needed
                require_once '../model/acme-model.php';
// Get the accounts model
                require_once '../model/accounts-model.php';
                
                require_once '../modules/navigation.php';

                $categories = getCategories();

                include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/header.php';
                ?>
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
        </div>
    </body>
</html>