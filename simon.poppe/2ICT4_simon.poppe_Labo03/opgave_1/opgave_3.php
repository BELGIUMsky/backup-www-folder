<?php
$myBaseDir = __DIR__ . '/images/';
$aantal = count(glob($myBaseDir . "*.jpg"));
$msgOmschrijving = '*';
$msgNewImg = '*';
$allOk = false;

if (isset($_POST['btnSubmit'])) {
    $msgOmschrijving = '';
    $msgNewImg = '*';
    $allOk = true;

    // name not set, or empty
    if (!isset($_POST['omschrijving']) || ((string) $_POST['omschrijving'] === '')) {
        $msgOmschrijving = 'geef alsjeblief een omschrijving in';
        $allOk = false;
    }
    
    if(!isset($_FILES['newImg']) || $_FILES['newImg']['name'] == '') {
        $msgNewImg = 'upload alsjeblief een foto';
        $allOk = false;
    }
    elseif (!($_FILES['newImg']['type'] == 'image/jpeg')) {
        $msgNewImg = 'upload alsjeblief een foto van het type jpeg';
        $allOk = false;
    }
}

if ($allOk) {
    file_put_contents(
        $myBaseDir . 'captions.txt', 
        file_get_contents($myBaseDir . 'captions.txt') . "\n" . $_POST['omschrijving']
    );
    @move_uploaded_file($_FILES['newImg']['tmp_name'], $myBaseDir . ($aantal+1) . '.jpg') or die('<p>Error while saving file in the uploads folder</p>');
    echo "working    " . $myBaseDir . ($aantal+1) . '.jpg';
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
        <h2>post</h2> <!-- formulier naar zichzelf sturen via post -->
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" >
            <dl>
                <h3 class="clearfix">Welke foto wilt u aan de lijst toevoegen.<h3>

                <dt><label for="omschrijving">omschrijving</label></dt>
                <dd class="text">                                   <!-- als er een waarde ingegeven is die terug tonen -->
                    <input type="text" id="omschrijving" name="omschrijving" value="<?php echo isset($_POST['omschrijving']) ? htmlentities($_POST['omschrijving']) : ''; ?>" />
                    <span class="message error"><?php echo $msgOmschrijving; ?></span>
                </dd>

                <dt><label for="newImg">gelieve een foto te kiezen enkel .jpg's toegelaten</label></dt>
                <dd class="text">                                   <!-- als er een waarde ingegeven is die terug tonen -->
                    <input type="file" name="newImg" id="newImg" accept="image/jpeg" />
                    <span class="message error"><?php echo $msgNewImg; ?></span>
                </dd>

                <dt class="full clearfix" id="lastrow">
                    <input type="submit" name="btnSubmit" value="Submit" />
                </dt>
            </dl>
        </form>
    </body>
</html>
<?php
    var_dump($_FILES);
?>