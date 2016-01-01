<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/init/mysql.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/init/memcache.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/init/session.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/func.main.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/auth.php');

switch($_POST['do']){
	default: echo "wrong do"; break;
	case 'new':
		$tmpData = error(support_create($user['id'], $_POST['title'], $_POST['msg']));
		if($tmpData['err'] == 'OK')
			$tmpData = error(support_msg($user['id'], $tmpData['mes'], $user['data']['access'], 1));
		if($tmpData['err'] == 'OK')
			$tmpData = error(lepus_get_supportList($user['id'], $user['data']['access'], $tmpData['mes']['tid']));
		echo json_encode($tmpData);
	break;
	case 'send_msg':
		$tmpData = error(support_msg($user['id'], $_POST['tid'], $user['data']['access']));
		if($tmpData['err'] == 'OK')
			$tmpData = error(lepus_get_supportMsg($tmpData['mes']['tid'], $user['id'], $user['data']['access'], $tmpData['mes']['msgID']));
		echo json_encode($tmpData);
	break;
	case 'update_msg':
		$tmpData = error(lepus_get_supportMsg($_POST['tid'], $user['id'], $user['data']['access'], 0, $_POST['count']));
		echo json_encode($tmpData);			
	break;
}
