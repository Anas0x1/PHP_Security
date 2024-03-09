<!DOCTYPE html>
<html>
<head>
    <title>Simple Web Application</title>
</head>
<body>
    <h1>Simple Web Application</h1>
    <form action="" method="post">
        <label for="command">Enter command:</label>
        <input type="text" id="command" name="command">
        <button type="submit">Execute</button>
    </form>

    <?php
    class Command {
        public $inject;
        
        public function __construct(){
            echo "[+] Construct function called successfully";
        }
        
        public function __wakeup(){
            if(isset($this->inject)){
                eval($this->inject);
            }
        }
    }
    
    if(isset($_REQUEST['r'])){  
        $var1=unserialize($_REQUEST['r']);
        if(is_array($var1)){ 
            echo "<br/>".$var1[0]." - ".$var1[1];
        }
    }
    else if(isset($_POST['command'])) {
        $command = $_POST['command'];
        $cmd = new Command();
        $cmd->inject = "echo shell_exec('$command');"; // Inject the command into $inject property
        $serialized_cmd = serialize($cmd);
        echo "<p>Serialized Command: $serialized_cmd</p>";
    }
    else {
        echo ""; // Nothing happens here
    }
    ?>

</body>
</html>
