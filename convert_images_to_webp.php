<?php 
function convert_images_to_webp() {
    $image_extensions = array('jpg', 'jpeg', 'png');
    $root_path = 'assets/img/';

    // Recursively scan for images in subdirectories
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root_path));

    foreach($iterator as $file) {
        if($file->isFile() && in_array($file->getExtension(), $image_extensions)) {
            // Convert image to webp
            $image = imagecreatefromstring(file_get_contents($file));
            $filename = $file->getPathname();
            $new_filename = substr($filename, 0, strrpos($filename, ".")) . ".webp";
            imagewebp($image, $new_filename, 85);
            imagedestroy($image);

            // Delete original image file
            unlink($filename);

            // Get relative path from root directory
            $relative_path = substr($filename, strpos($filename, $root_path) + strlen($root_path));

            // Replace file extension with webp in HTML file
            $html_file = file_get_contents('index.php');
            $html_file = str_replace($relative_path, substr($relative_path, 0, strrpos($relative_path, ".")) . ".webp", $html_file);
            file_put_contents('index.php', $html_file);
        }
    }
}

?>