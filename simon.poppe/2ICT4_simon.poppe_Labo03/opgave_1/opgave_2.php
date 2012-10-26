<?php
    $myBaseDir	= './images/';
    $images;
    $captions;

    // read base directory
    $di = new DirectoryIterator($myBaseDir);
    
    foreach ($di as $file) {
        // exclude . and .. + we don't want directories
        if (!$file->isDot() && !$file->isDir()) {
            if ($file->getExtension() == "jpg") {
                $images[] = $file->getFilename();
            }
        }
    }
    
    
    // Loop through our array, show line and line numbers too.
    $lines = new SPLFileObject($myBaseDir . '/captions.txt');
    foreach ($lines as $line_num => $line) {
        $captions[] = str_replace("\n", '', $line);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

    </head>
    <body>
        <h2>images</h2> <!-- formulier naar zichzelf sturen via post -->
        <dl>
            <?php
                for($i = 0; $i < count($images); $i++) {
                    echo '<dt>' . $captions[$i] . '</dt>' . PHP_EOL;
                    echo '<dd><img src="' . $myBaseDir . $images[$i] . '" alt="' . $captions[$i] . '"></dd>' . PHP_EOL;
                }
            ?>
        </dl>
    </body>
</html>