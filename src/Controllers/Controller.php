<?php
namespace App\Controllers;
use Smarty;

abstract class Controller
{
	private $smarty;
	function __construct()
	{
		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir(APP.'/Resources/templates');
		$this->smarty->setCompileDir(APP.'/Resources/templates_c');
		$this->smarty->setCacheDir(APP.'/Resources/cache');
		$this->smarty->setConfigDir(APP.'/Resources/configs');
		$this->smarty->caching = SMARTY_CACHE;

		$this->smarty->assign(
		    [
		        'admin' => $this->checkAdmin(),
                'message' => $this->getFlashSession()
            ]
        );

	}

	public function getSmarty(){
	    return $this->smarty;
    }

	public function redirect($url, $message = null){
        if (isset($message)){
            $_SESSION['message'] = $message;
        }
		header('Location:'.$url);
	}

	public function getFlashSession(){
	    $message = isset($_SESSION['message']) ? $_SESSION['message'] : null;

	    if (isset($message)){
	        unset($_SESSION['message']);
        }

        return $message;
    }

    public function checkAdmin(){
	    return isset($_SESSION['admin']) ? true : false;
    }
}