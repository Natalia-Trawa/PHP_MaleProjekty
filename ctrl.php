<?php

require_once  'init.php';


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	default : 
		include_once $conf->root_path.'/app1/calc/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app1/calc/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
		
	break;
	case 'action2' :
		
	break;
}
