<html>

    <body>
        <form id="xss">
            <?php
                session_start();
                $param = $_GET['param'];
                echo '<input type="text" name="param" value="' . htmlentities($param) . '">'; 
                echo '<input type="submit" name="submit">'; 
            ?>
        </form>
    </body>
</html>