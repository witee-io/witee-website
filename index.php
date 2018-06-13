<?php
	$lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])['0'];

	if($lang == 'zh-CN' or $lang == 'zh-cn'){
		header('Location: /index.html');
		exit();
	}else{
		header('Location: /index_en.html');
		exit();
	}
?>
