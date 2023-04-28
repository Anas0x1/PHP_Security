<html>
    <body>
        <form id="xss">
            <?php
                session_start();
                if (isset($_GET['name']))
                {
                    echo '<h1>Hello ' . $_GET['name'] . '</h1>';  
                }
            ?>
        </form>
    </body>
</html>