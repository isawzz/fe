<?php
// Get the requested file from the query string
$file = $_GET['file'];
$ext = $_GET['ext'];

// Define the directory where files are stored
$directory = './';

// Ensure the requested file exists and is within the specified directory
$path = $directory . $file . '.' . $ext;
if (file_exists($path) && strpos(realpath($path), realpath($directory)) === 0) {
    // Set appropriate headers
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $file);
    header('Content-Length: ' . filesize($path));

    // Output the file content
    readfile($path);
} else {
    // Handle the case where the file doesn't exist or is outside the allowed directory
    echo 'File not found or access denied.';
}