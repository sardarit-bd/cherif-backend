<?php
return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['https://your-frontend.com', 'http://localhost:3000'],
    'allowed_headers' => ['*'],
    'exposed_headers' => ['Authorization'],
    'supports_credentials' => false,
];
