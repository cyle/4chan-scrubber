<?php

// what does this do?
// it just does a basic cURL request for the 4chan API
// and spits out the resulting JSON to the client
// because Javascript isn't allowed to do so by itself in the browser
// due to cross-site scripting security protocols

// docs: https://github.com/4chan/4chan-API
$api_url = 'http://a.4cdn.org/b/1.json';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1); // basic timeout protection
curl_setopt($ch, CURLOPT_TIMEOUT, 1); // basic timeout protection
$output = curl_exec($ch);
curl_close($ch);

echo $output;