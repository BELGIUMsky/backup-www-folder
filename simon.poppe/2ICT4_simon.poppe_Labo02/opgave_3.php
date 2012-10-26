<?php
    $msgUser = '*';  // 
    // form is sent
    if (isset($_GET['btnSubmit'])) {
        $msgUser = "De prijs voor een geheugenmodulle van " . $_GET['geheugen'] . " is ";   // begin van het bericht dat naar de gebruiker verstuurd zal worden
        switch($_GET['geheugen']){  // switch om te bepalen hoeveel er betaald moet worden (kan gemakkelijker via een array)
            case '4GB':
                $msgUser .= '45';
                break;
            case '8GB':
                $msgUser .= '54';
                break;
            case '16GB':
                $msgUser .= '109';
                break;
            default:
                break;
        }
        $msgUser = $msgUser . " euro";
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
        <h2>Get</h2>  <!-- formulier naar zichzelf sturen via get -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <dl class="clearfix">                                   <!-- kijken welke geheugen aangeduid geweest is en terug tonen -->
                <dt><input type="radio" name="geheugen" value="4GB"<?php if (isset($_GET['geheugen']) && $_GET['geheugen']
                     === '4GB') { echo ' checked="checked"'; } ?> />4GB</dt>
                <dt><input type="radio" name="geheugen" value="8GB"<?php if (isset($_GET['geheugen']) && $_GET['geheugen']
                     === '8GB') { echo ' checked="checked"'; } ?> />8GB</dt>
                <dt><input type="radio" name="geheugen" value="16GB"<?php if (isset($_GET['geheugen']) && $_GET['geheugen']
                     === '16GB') { echo ' checked="checked"'; } ?> />16GB</dt>
                <dd><?php echo $msgUser; ?></dd>

                <dt class="full clearfix" id="lastrow">
                    <input type="submit" name="btnSubmit" value="Send" />
                </dt>
            </dl>
        </form>
    </body>
</html>
<?php
    var_dump($_GET);
?>