<?php
	header('content-type: application/json; charset=utf-8');
        require_once('../shared/config.php');
        $url = 'https://getpocket.com/v3/get?count=5';
        $data = array(
                'consumer_key' => $consumer_key, 
		'access_token' => $_GET['access_token'],
		'detailType'=>'complete'
        );
        $options = array(
                'http' => array(
                        'method'  => 'POST',
                        'content' => http_build_query($data)
                )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        echo "myJsonMethod(".$result.");";
?>
