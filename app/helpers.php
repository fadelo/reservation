<?php 

//il faut penser a autoloder cela dans composer.json avec la commande composer dump-autoload -o dans la console

	if (!function_exists('flash')) {

		function flash($message, $type='info'){
			session()->flash('notification.message',$message);
			session()->flash('notification.type',$type);
		}
	}


 ?>