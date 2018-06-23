<?php 

/**
 * For making sure Faveo test setup is available here
 */
require __DIR__.'/../../../../vendor/autoload.php';

//check if vendor folder exists in current plugin
if(file_exists(__DIR__.'../vendor/autoload.php')){
	
	/**
	 * For making it use its own vendor also
	 */
	require __DIR__.'../vendor/autoload.php';
}
