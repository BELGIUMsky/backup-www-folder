<?php
    // berichten naar de gebruiker 
    $msgNaam = '*';
    $msgEmail = '*';
    $msgBeroep = '*';
    $msgVanWat = '*';
    $msgCommentaar = '*';
    // form is sent
    if (isset($_POST['btnSubmit'])) {

        $allOk = true;

        // name not set, or empty
        if (!isset($_POST['naam']) || ((string) $_POST['naam'] === '')) {
                $msgNaam = 'geef alsjeblief je naam in';
                $allOk = false;
        }

        // email not set, or empty
        if (!isset($_POST['email']) || ((string) $_POST['email'] === '')) {
                $msgEmail = 'geef alsjeblief je email-adres';
                $allOk = false;
        }

        // beroep not set, or empty
        if ((string) $_POST['beroep'] == 0) {
                $msgBeroep = 'kies alsjeblief een beroep uit de lijst';
                $allOk = false;
        }

        // minimaal 1 keuze gekozen not set, or empty
        if (!isset($_POST['vanWat'])) {
                $msgVanWat = 'geef alsjeblief minimaal 1 keuze op';
                $allOk = false;
        }

        // email not set, or empty
        if (!isset($_POST['commentaar']) || ((string) $_POST['commentaar'] === '')) {
                $msgCommentaar = 'geef alsjeblief wat commentaar';
                $allOk = false;
        }

        // end of form check. If $allOk still is true, then the form was sent in correctly
        if ($allOk === true) {// if correct verstuur naam naar danku php file
                header('Location: opgave_5b.php?name=' . urlencode($_POST['naam']));
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
                <h3 class="clearfix">Waar heeft u ons bedrijf leren kennen?<h3>

                <dt><label for="naam">naam</label></dt>
                <dd class="text">                                   <!-- als er een waarde ingegeven is die terug tonen -->
                    <input type="text" id="naam" name="naam" value="<?php echo isset($_POST['naam']) ? htmlentities($_POST['naam']) : ''; ?>" />
                    <span class="message error"><?php echo $msgNaam; ?></span>
                </dd>
                
                <dt><label for="email">email</label></dt>
                <dd class="text">                                      <!-- als er een waarde ingegeven is die terug tonen -->
                    <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlentities($_POST['email']) : ''; ?>" />
                    <span class="message error"><?php echo $msgEmail; ?></span>
                </dd>
                
                <dt><label for="beroep">Beroep</label></dt>
                <dd>
                    <select name="beroep" id="beroep">      <!-- als een beroep gekozen is toon die terug -->
                        <option value="0"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 0)) { echo ' selected="selected"'; } ?>>selecteer je beroep</option>
                        <option value="1"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 1)) { echo ' selected="selected"'; } ?>>loodgieter</option>
                        <option value="2"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 2)) { echo ' selected="selected"'; } ?>>programmeur</option>
                        <option value="3"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 3)) { echo ' selected="selected"'; } ?>>bediende</option>
                        <option value="4"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 4)) { echo ' selected="selected"'; } ?>>leerkracht</option>
                        <option value="5"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 5)) { echo ' selected="selected"'; } ?>>schrijver</option>
                        <option value="6"<?php if (isset($_POST['beroep']) && ((int) $_POST['beroep'] === 6)) { echo ' selected="selected"'; } ?>>ander</option>
                    </select>
                    <span class="message error"><?php echo $msgBeroep; ?></span>
                </dd>
                
                <dt><label for="vanWat">van wie of van wat heb je over ons bedrijf gehoord</label></dt>
                <dd><!-- selecteer terug de gecheckte checkboxen -->
                    <input type="checkbox" name="vanWat[]" value="internet"<?php if (isset($_POST['vanWat']) && in_array(
                        'internet', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />internet
                    <input type="checkbox" name="vanWat[]" value="vrienden"<?php if (isset($_POST['vanWat']) && in_array(
                        'vrienden', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />vrienden
                    <input type="checkbox" name="vanWat[]" value="advertenties"<?php if (isset($_POST['vanWat']) && in_array(
                        'advertenties', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />advertenties
                    <input type="checkbox" name="vanWat[]" value="andere"<?php if (isset($_POST['vanWat']) && in_array(
                        'andere', $_POST['vanWat'])) { echo ' checked="checked"'; } ?> />andere
                    <span class="message error"><?php echo $msgVanWat; ?></span>
                </dd>
                
                <dt><label for="commentaar">commentaar</label></dt>
		<dd class="text">                                                  <!-- als er een waarde ingegeven is die terug tonen -->
                    <textarea name="commentaar" id="commentaar" rows="5" cols="40"><?php echo isset($_POST['commentaar']) ? htmlentities($_POST['commentaar']) : ''; ?></textarea>
                    <span class="message error"><?php echo $msgCommentaar; ?></span>
                </dd>


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