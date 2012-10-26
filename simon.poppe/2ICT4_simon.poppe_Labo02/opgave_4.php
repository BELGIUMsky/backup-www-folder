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
                <h3 class="clearfix">Waar heeft u ons bedrijf leren kennen?<h3>

                <dt><label for="naam">naam</label></dt>
                <dd class="text">                                   <!-- als er een waarde ingegeven is die terug tonen -->
                    <input type="text" id="naam" name="naam" value="<?php echo isset($_POST['naam']) ? htmlentities($_POST['naam']) : ''; ?>" />
                </dd>
                
                <dt><label for="email">email</label></dt>
                <dd class="text">                                      <!-- als er een waarde ingegeven is die terug tonen -->
                    <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlentities($_POST['email']) : ''; ?>" />
                </dd>
                
                <dt><label for="beroep">Beroep</label></dt>
                <dd>
                    <select name="beroep" id="beroep"><!-- het geselecteerde beroep terug tonen -->
                        <option value="0"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 0)) { echo ' selected="selected"'; } ?>>selecteer je beroep</option>
                        <option value="1"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 1)) { echo ' selected="selected"'; } ?>>loodgieter</option>
                        <option value="2"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 2)) { echo ' selected="selected"'; } ?>>programmeur</option>
                        <option value="3"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 3)) { echo ' selected="selected"'; } ?>>bediende</option>
                        <option value="4"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 4)) { echo ' selected="selected"'; } ?>>leerkracht</option>
                        <option value="5"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 5)) { echo ' selected="selected"'; } ?>>schrijver</option>
                    </select>
                </dd>
                
                <dt><label for="van wat">van wie of van wat heb je over ons bedrijf gehoord</label></dt>
                <dd>                                                       <!-- de gekozen checkboxen terug selecteren -->
                    <input type="checkbox" name="vanWat[]" value="internet"<?php if (isset($_POST['vanWat']) && in_array(
                        'internet', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />internet
                    <input type="checkbox" name="vanWat[]" value="vrienden"<?php if (isset($_POST['vanWat']) && in_array(
                        'vrienden', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />vrienden
                    <input type="checkbox" name="vanWat[]" value="advertenties"<?php if (isset($_POST['vanWat']) && in_array(
                        'advertenties', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />advertenties
                    <input type="checkbox" name="vanWat[]" value="andere"<?php if (isset($_POST['vanWat']) && in_array(
                        'andere', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />andere
                </dd>
                
                <dt><label for="comm">commentaar</label></dt>                         <!-- als er een waarde ingegeven is die terug tonen -->
		<dd class="text"><textarea name="comm" id="remark" rows="5" cols="40"><?php echo isset($_POST['comm']) ? htmlentities(stripPostSlashes($_POST['comm'])) : ''; ?></textarea></dd>


                <dt class="full clearfix" id="lastrow">
                    <input type="submit" name="btnSubmit" value="Submit" />
                </dt>

            </dl>
        </form>
    </body>
</html>
<?php
    var_dump($_POST);
?>