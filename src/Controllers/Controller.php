<?php
namespace App\Controllers;
use Smarty;

abstract class Controller
{
	private $smarty;
	function __construct()
	{
	    //настройки Смарти
		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir(APP.'/Resources/templates');
		$this->smarty->setCompileDir(APP.'/Resources/templates_c');
		$this->smarty->setCacheDir(APP.'/Resources/cache');
		$this->smarty->setConfigDir(APP.'/Resources/configs');
		$this->smarty->caching = SMARTY_CACHE;

		$this->smarty->assign( //стандартные значения, которые мы передаем в Смарти
		    [
                'message' => getFlashSession()
            ]
        );

	}

	public function getSmarty(){
	    return $this->smarty;
    }
}