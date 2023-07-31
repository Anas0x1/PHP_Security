<html>
        <body>
            <p>Please Login</p>
            <form id="form1">

                <input type="hidden" name="sessionId" value="<?php session_start(); echo $_REQUEST['sid'];?>">
                Username : <input type="text" name="username">
                Password : <input type="password" name="password">
                <input type="submit" value="login">

        
            </form>
            
            
        </body>
</html>