<?php
// Define an array of allowed domains
$allowed_domains = array(
    "example.com",
    "example.org"
);

// Get the URL from the GET parameter
$url = $_GET['url'];

// Check if the URL belongs to an allowed domain
$domain = parse_url($url, PHP_URL_HOST);
if (!in_array($domain, $allowed_domains)) {
    echo "Access to the specified URL is not allowed.";
    exit;
}

// Proceed with the CURL request
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl, CURLOPT_TIMEOUT, 5);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
$data = curl_exec ($curl);
if(curl_error($curl)){
    echo curl_error($curl);
}else{
    echo "<pre>" . $data . "</pre>";
}
curl_close ($curl);
?>
