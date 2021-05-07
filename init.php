<?php


require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'conf.php'; 

function &getConf(){ global $conf; return $conf; }

require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){ global $msgs; return $msgs; }


$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
	
		include_once getConf()->root_path.'/lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
	
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app1/views',
			'two' => getConf()->root_path.'/app1/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php'; 
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once getConf()->root_path.'/core/functions.php';

$action = getFromRequest('action');
