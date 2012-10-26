<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
	<link rel="stylesheet" type="text/css" href="styles.css" />

    </head>
    <body>              <!-- formulier naar zichzelf sturen via get -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

            <fieldset>
                <h2>Get</h2>
                <dl class="clearfix">
                    <dt><label for="getal1">getal1</label></dt>
                    <dd class="text">                                       <!-- wordt er iets doorgestuurd zoja toon die waarde terug zo niet maak een random getal en toon dat -->
                        <input type="number" id="getal1" name="getal1" value="<?php echo isset($_GET['getal1']) ? htmlentities($_GET['getal1']) : rand(); ?>" />
                    </dd>

                    <dt><label for="getal2">getal2</label></dt>
                    <dd class="text">                                       <!-- wordt er iets doorgestuurd zoja toon die waarde terug zo niet maak een random getal en toon dat -->
                        <input type="number" id="getal2" name="getal2" value="<?php echo isset($_GET['getal2']) ? htmlentities($_GET['getal2']) : rand(); ?>" />
                    </dd>

                    <dt><label for="som">som</label></dt>
                    <dd class="text">                                                   <!-- zijn er twee waarden meegegeven zoja toon dan de som -->
                        <input type="number" id="som" name="som" disabled="true" value="<?php echo isset($_GET['getal1']) && isset($_GET['getal2']) ? htmlentities($_GET['getal1']) + htmlentities($_GET['getal2']) : ""; ?>" />
                    </dd>

                    <dt class="full clearfix" id="lastrow">
                        <input type="submit" name="btnSubmit" value="Send" />
                    </dt>
                </dl>
            </fieldset>
        </form>
    </body>
</html>
<?php
    var_dump($_GET);
?>