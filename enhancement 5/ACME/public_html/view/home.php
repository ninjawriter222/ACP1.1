<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Acme Home Page</title>
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Poe">
        <meta name="description" content="Describe your web site here">
        <link rel="stylesheet" type="text/css" href="/ACME/public_html/css/style.css">

    </head>
    <body id="background">
        <div id="white">

            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/header.php'; ?>
            </header>
            <nav>
                <?//php echo $navList; ?>
            </nav>
            <main id="home-content">
                <h1>Welcome to Acme!</h1>
                <div id="top">
                    <img id="banner" src="/ACME/public_html/images/site/rocketfeature.jpg" alt="banner">
                    <div id="acmerocket">
                        <h2 id="purple">Acme Rocket</h2>
                        <p>Quick lighting fuse<br>
                            NHTSA approved seat belts<br>
                            Mobile launch stand included<br>
                            <a href="#"><img id="actionbtn" alt="Add to cart button" src="/ACME/public_html/images/site/iwantit.gif"></a></p>
                    </div>
                </div>
                <div id="bottom-part">
                    <div>
                        <h2>Acme Rocket Reviews</h2>
                        <ul>
                            <li>"I don't know how I ever caught roadrunners before this." (9/10)</li>
                            <li>"That thing was fast!" (4/5)</li>
                            <li>"Talk about fast delivery." (5/5)</li>
                            <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                            <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Featured Recipes</h2>
                        <table>
                            <tr>
                                <th><img src="/ACME/public_html/images/recipes/bbqsand.jpg" alt="bbqsand"></th>
                                <th><img src="/ACME/public_html/images/recipes/potpie.jpg" alt="potpie"></th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"> Pulled Roadrunner BBQ </a> &nbsp;
                                </td>
                                <td>
                                    <a href="#">Roadrunner Pot Pie</a>
                                </td>
                            </tr>
                            <tr>
                                <th><img src="/ACME/public_html/images/recipes/soup.jpg" alt="soup"></th>
                                <th><img src="/ACME/public_html/images/recipes/taco.jpg" alt="taco"></th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Roadrunner Soup</a>
                                </td>
                                <td>
                                    <a href="#"> Roadrunner Tacos</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/ACME/public_html/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
