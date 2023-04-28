<html>

    <body>
        <form id="xss">
            <?php
                session_start();
                if (isset($_GET['param']))
                {
                    $param = $_GET['param'];
                    echo '<input type="text" name="param" value="' . $param . '">'; 
                    echo '<input type="submit">';
                    echo '<h3>Hello ' . htmlentities($param) . '</h3>';

                } 
            ?>
        </form>
    </body>
</html>