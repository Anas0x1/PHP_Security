<?php
// Set allowed origin(s) to restrict CORS
$allowed_origins = array(
    'https://trusted-domain.com',
    'http://localhost:8080' // Example of a trusted local development server
);

// Check if the request origin is in the list of allowed origins
$request_origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($request_origin, $allowed_origins)) {
    header('Access-Control-Allow-Origin: ' . $request_origin);
    header('Access-Control-Allow-Credentials: true');
}

echo "Username: admin" . "\r\n";
echo "Password: admin" . "\r\n";
?>
