<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Acme Login Page</title>
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Poe">
        <meta name="description" content="Describe your web site here">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <?php
        require_once '../sql/functions.php';
// Get the array of categories
        $categories = getCategories();
        ?>
    </head>
    <body id="background">
        <div id="white">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/header.php'; ?>        
            </header>
            <main>
                <div id="login">
                    <h1>Acme Login</h1>
                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                    <form action="/ACME/public_html/index.php?action=login" method="POST">
                        <h5>(All Fields are required)</h5>
                        <span>E-mail address</span>
                        <input name="email" id="email" type="text" <?php
                    if (isset($clientEmail)) {
                        echo "value='$clientEmail'";
                    }
                    ?> required> 
                        <br>
                        <span>Password</span>
                        <input name="password"  id="password" type="text" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                        <br>
                        <input type="hidden" name="action" value="login">
                        <button type="submit">Login</button>
                        <br>
                    </form>

                    <span>If do not have an account please create one by clicking the button below.</span>
                    <form method="post" action="/ACME/public_html/index.php?action=registration">    
                        <button type="submit">Registration</button>
                    </form>
                </div>
            </main>
            <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>

