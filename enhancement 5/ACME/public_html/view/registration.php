<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Acme Registration Page</title>
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="your name here">
        <meta name="description" content="Acme website">
        <link rel="stylesheet" type="text/css" href="/ACME/public_html/css/style.css">

    </head>
    <body id="background">
        <div id="white">

            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/header.php'; ?>        
            </header>
            <main>
                <div id="register">
                    <h1>Acme Registration</h1>
                    
                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>

                    <form action="/ACME/public_html/accounts/index.php" method="POST">
                        <h5>(All Fields are required)</h5>
                        <fieldset>
                            <span>First Name</span>
                            <input type="text" name="clientFirstname" id="clientFirstname" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> required>
                            <br>
                            <br>
                            <span>Last name</span>
                            <input type="text" name="clientLastname" id="clientLastname" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?> required>
                            <br>
                            <br>
                            <span>E-mail address</span>
                            <input type="email" name="clientEmail" id="clientEmail" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required>     
                            <br>
                            <br>
                            <span>Password: make sure your password is at least 8 characters, has at least 1 uppercase character, 1 number and 1 special character</span>
                            <input type="password" name="clientPassword" id="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                            <br>
                            <!--my original button below
                            <button type="submit">Register</button>-->
                            <input type="submit" name="submit" id="regbtn" value="register">
                            <!-- Add the action name - value pair -->
                            <input type="hidden" name="action" value="register">
                        </fieldset>
                    </form>
                </div>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>

