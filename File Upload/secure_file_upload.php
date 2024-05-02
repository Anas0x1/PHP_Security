<?php

if (isset($_POST['Upload'])) {
    // Define allowed file types
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    
    // Where are we going to be writing to?
    $target_dir = DVWA_WEB_PAGE_TO_ROOT . "hackable/uploads/";

    // Get the file name and extension
    $file_name = basename($_FILES['uploaded']['name']);
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Check if the file type is allowed
    if (!in_array($file_ext, $allowed_types)) {
        $html .= '<pre>Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.</pre>';
        exit();
    }

    // Generate a unique file name to prevent overwriting existing files
    $file_name = uniqid() . '.' . $file_ext;

    // Set the target path
    $target_path = $target_dir . $file_name;

    // Check if the file size is within limits (e.g., 2MB)
    if ($_FILES['uploaded']['size'] > 2 * 1024 * 1024) {
        $html .= '<pre>File size exceeds the limit of 2MB.</pre>';
        exit();
    }

    // Can we move the file to the upload folder?
    if (!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
        // No
        $html .= '<pre>Your image was not uploaded.</pre>';
    } else {
        // Yes!
        $html .= "
