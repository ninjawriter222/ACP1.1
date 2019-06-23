<a href="/ACME/public_html/index.php" title="Vist the Acme home page for more great roadrunner catching products"></a>
<div class="logoarea">
    <img id="logo" src="/ACME/public_html/images/site/logo.gif" alt="acmelogo">
    <div class="right">
        <div class="account">
            <?php
            if (isset($_SESSION['loggedin'])) {
                echo "<span id='welcome'><a href='/ACME/public_html/accounts'>Welcome " . $clientData['clientFirstname'] . "</a></span>";
            }
            ?>

            <?php
            if (isset($_SESSION['loggedin'])) {
                echo "<div id='loggedin'>";
                echo "<div id='logout'><a href='/ACME/public_html/accounts/index.php?action=Logout'>Logout</a></div>";
                echo "<div id='update'><a href='/ACME/public_html/accounts/index.php?action=user-mgt'>Update Account</a></div>";
                echo "</div>";
            } else {
                echo "<a href='/ACME/public_html/accounts/index.php?action=login' class='link'>
                    <img src='/ACME/public_html/images/site/account.gif' alt='Account Folder GIF' id='folder'>My Account</a>";
            }
            
            require_once 'navigation.php';
            
            ?>
        </div>
    </div>
</div>
<nav>
<?php echo $navList; ?>
</nav>