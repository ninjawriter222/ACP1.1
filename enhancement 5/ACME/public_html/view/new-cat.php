<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen">
        <title>Acme| Category</title>
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
                <form action="/ACME/public_html/products/index.php?action=addCategory" method="post">
                    <input type="text" name="categoryName"
                    <?php if(isset($categoryName)){echo "value='$categoryName'";} ?> required />
                    <br>
                    <button type='submit'>Add Category</button>
                </form>
            </div>
        </main>
    
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/footer.php'; ?>
        </footer>
        </div>
    </body>
</html>