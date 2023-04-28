<html>
    <body>
        <form id="xss">
            <?php                
                echo '<h1>Hello ' . $_GET['name'] . '</h1>';  
            ?>
        </form>
    </body>
</html>
