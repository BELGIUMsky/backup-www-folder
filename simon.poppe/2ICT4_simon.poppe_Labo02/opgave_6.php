<?php
                
    $msgNaam = '*';
    $teller = isset($_POST["teller"]) ? $_POST["teller"] : 1;
    if (isset($_POST["btnAdd"])) {
        $teller++;
    }
    $msgProducten = '';
    for($i = 0; $i < $teller; $i++) {
        $msgProducten[$i] = '*';
    }
    $urlProducten = '&teller=' . $teller;
    // form is sent
    if (isset($_POST['btnSubmit'])) {

        $allOk = true;

        // name not set, or empty
        if (!isset($_POST['naam']) || ((string) $_POST['naam'] === '')) {
                $msgNaam = 'geef alsjeblief je naam in';
                $allOk = false;
        }
        
        
        for($i = 0; $i < $teller; $i++) {
            $urlProducten .= '&product' . $i . '=' . urlencode($_POST["product" . $i]);
            if (!isset($_POST["product" . $i]) || ((string) $_POST["product" . $i] === '')) {
                $msgProducten[$i] = 'geef alsjeblief een product' . ($i + 1) . ' in';
                $allOk = false;
            }
        }

        // end of form check. If $allOk still is true, then the form was sent in correctly
        if ($allOk === true) {
            header('Location: opgave_6b.php?naam=' . urlencode($_POST['naam']) . $urlProducten);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
	<link rel="stylesheet" type="text/css" href="styles.css" />

    </head>
    <body>
        <h2>POST</h2> <!-- formulier naar zichzelf sturen via post -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <dl>
                <dt><label for="naam">naam</label></dt>
                <dd class="text">                                   <!-- als er een waarde ingegeven is die terug tonen -->
                    <input type="text" id="naam" name="naam" value="<?php echo isset($_POST['naam']) ? htmlentities($_POST['naam']) : ''; ?>" />
                    <span class="message error"><?php echo $msgNaam; ?></span>
                </dd>
                <?php
                    for($i = 0; $i < $teller; $i++) {
                        echo '<dt><label for="product' . $i . '">product' . ($i+1) . '</label></dt>' . PHP_EOL;
                        echo '<dd class="text">' . PHP_EOL;                                                 // als er een waarde ingegeven is die terug tonen
                        echo '<input type="text" id="product' . $i . '" name="product' . $i . '" value="' . (isset($_POST["product" . $i]) ? htmlentities($_POST["product" . $i]) : "") . '" />' . PHP_EOL;
                        echo '<span class="message error">' . $msgProducten[$i] . '</span>';
                        echo '</dd>' . PHP_EOL . PHP_EOL;
                    }
                ?>
                
                

                <dd><input name="teller" type="hidden" id="teller" value="<?php echo $teller;?>"></dd>
                <dt class="full clearfix" id="lastrow">
                    <input type="submit" name="btnAdd" value="Product toevoegen" />
                    <input type="submit" name="btnSubmit" value="Verstuur order" />
                </dt>

            </dl>
        </form>
    </body>
</html>
<?php
    var_dump($urlProducten);
    var_dump($_POST);
?>