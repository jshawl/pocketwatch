<?php
	header('content-type: application/json; charset=utf-8');
        require_once('../generate/config.php');
        $url = 'https://getpocket.com/v3/get?count=5';
        $data = array(
                'consumer_key' => $consumer_key, 
                'access_token' => $_GET['access_token']
        );
        $options = array(
                'http' => array(
                        'method'  => 'POST',
                        'content' => http_build_query($data)
                )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
	var_dump($http_response_header);
        echo "myJsonMethod(".$result.");";
?>
