<?php            
    $teller = isset($_GET["teller"]) ? $_GET["teller"] : 1;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
	<link rel="stylesheet" type="text/css" href="styles.css" />

    </head>
    <body>
        <h2>POST</h2> 
        <?php
        
            // Name completed
            if (isset($_GET['naam'])) {
                    echo '<p>goedendag, ' . htmlentities($_GET['naam']). '</p>';
            }

            // Name not completed
            else {
                    echo '<p>goedendag, vreemdeling</p>';
            }
        
            echo '<h3>Producten:<h3>';
            echo '<ul>';
            for($i = 0; $i < $teller; $i++) {
                echo '<li> product' . ($i + 1) . ' = ' . htmlentities($_GET["product" . $i]) . ' </li>' . PHP_EOL;
            }
            echo '</ul>';
        ?>
    </body>
</html>
<?php
    var_dump($_GET);
?>