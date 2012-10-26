<?php

/**
 * List the contents of a directory (files only)
 * @author Bramus Van Damme <bramus.vandamme@kahosl.be>
 */

	// Our base dir
	$myBaseDir = './'; 
	
	// open base directory
	$di = new DirectoryIterator($myBaseDir);
	
	// read base directory
	foreach ($di as $file) {
		
		// exclude . and .. + we don't want directories
		if (!$file->isDot() && !$file->isDir()) {
			echo $file . '<br />' . PHP_EOL;
		}
		
	}

// EOF