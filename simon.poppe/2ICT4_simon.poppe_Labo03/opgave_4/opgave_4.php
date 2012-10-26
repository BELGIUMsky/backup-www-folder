<?php
    $myBaseDir	= './';
    $dirs = null;
    $files = null;
    $path = isset($_GET['path']) ? $_GET['path']:"";
    $currentDir = $myBaseDir . ($path != "" ? '/' . $path . '/': "");
    $fidir = new SplFileInfo($currentDir);

    if(!$fidir->isDir()){
        $currentDir = $myBaseDir;
        $path = "";
    }
    
    // read base directory
    $di = new DirectoryIterator($currentDir);
    
    foreach ($di as $thing) {
        // exclude . and .. + we don't want directories
        if (!$thing->isDot()) {
            if ($thing->isDir()) {
                $dirs[] = $thing->getFilename();
            }
            else {
                $files[] = $thing->getFilename();
            }
        }
    }
?>
<!doctype html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8" />
	<style>
		ul {
			margin: 0;
			padding: 0;
		}
		li {
			list-style: none;
			display: block;
			height: 24px;
			line-height: 24px;
			font-family: monospace;
		}

		li:nth-child(2n) {
			background: rgba(0,0,0,0.05);
		}

		li:hover {
			background: #c2e1ff;
		}

		li img {
			margin-right: 4px;
			position: relative;
			top: 4px;
		}
	</style>
</head>
<body>

	<h1>Browsing <code><?php echo $path ?></code></h1>

	<ul>
            <?php
                if($path != ""){
                    echo '<li><a href="opgave_4.php?path=' . $path . '"><img src="icons/up.gif" />..</a></li>';
                }
                if($dirs != null) {
                    foreach($dirs as $dir) {
                        echo '<li><a href="opgave_4.php?path=' . $dir . '"><img src="icons/folder.gif" />' . $dir . '</a></li>';
                    }
                }
                if($files != null) {
                    foreach ($files as $file) {
                        $file = $path . ($path == "" ? "" : "\\") . $file;
                        $filePath = $myBaseDir . $file;
                        $fi = new SplFileInfo($filePath);
                        
                        $logo = $fi->getExtension() . '.gif';
                        $lo = new SplFileInfo($myBaseDir . 'icons/' . $logo);
                        if(!$lo->isFile()){
                            $logo = 'default.gif';
                        }
                        echo '<li><a href="' . $filePath . '"><img src="icons/' . $logo .'" />' . $file . '</a> <em>(' . $fi->getSize() . 'kB)</em></li>';
                    }
                }
            ?>
	</ul>

</body>
</html>