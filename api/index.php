<?php

// Vercel serverless function entry point for Laravel
$_SERVER['SCRIPT_NAME'] = '/api/index.php';

// Set the public path
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Include the Laravel bootstrap
require __DIR__ . '/../public/index.php';