<?php
    session_start();    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Hej</title>
    </head>
    <body>
        <?php
       
        if (isset($_POST[submit]) && $_POST[submit] == "Goddag")
        {
            $_SESSION[navn] = $_POST[navn];
        }
        
        echo "Hej $_SESSION[navn]";
        
        
        
        ?>
        <form method="post" action="" >
            <label for="navn">Navn:</label>
            <input type="text" name="navn" />
            
            <label for="alder">Alder:</label>
            <input type="text" name="alder" />
                
            
            <input type="submit" name="submit" value="Goddag">
         </form>
    </body>
</html>
