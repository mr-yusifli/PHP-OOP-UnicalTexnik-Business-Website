<?php 


function addWatermark($filename) {
    // Dosya uzantısına göre uygun işlevi seç
    $image = null;
    if (preg_match('/\.(jpg|jpeg)$/i', $filename)) {
        $image = imagecreatefromjpeg($filename);
    } else if (preg_match('/\.png$/i', $filename)) {
        $image = imagecreatefrompng($filename);
    }

    // Eğer uygun işlev seçilemediyse, hata ver ve fonksiyondan çık
    if (!$image) {
        echo "Geçersiz dosya türü!";
        return;
    }

    $text = "unicaltexnik.com";
    $fontsize = 10; // font size
    $text_color = imagecolorallocatealpha($image, 255, 255, 255,75); // white text color
    $font = 'C:\xampp\htdocs\unikaltexnik\yonetim\assets\fonts\timesnewroman.ttf';

    // Metnin boyutunu hesapla
    $text_size = imagettfbbox($fontsize, 0, $font, $text);
    $text_width = $text_size[2] - $text_size[0];
    $text_height = $text_size[1] - $text_size[7];

    // Metnin koordinatlarını hesapla
    $image_width = imagesx($image);
    $image_height = imagesy($image);
    $text_x = $image_width - $text_width - 5;
    $text_y = $image_height - $text_height - 2;

    // Metni ekle
    imagettftext($image, $fontsize, 0, $text_x, $text_y, $text_color, $font, $text);

    // Resmi kaydet
    if (preg_match('/\.(jpg|jpeg)$/i', $filename)) {
        imagejpeg($image, $filename, 100);
    } else if (preg_match('/\.png$/i', $filename)) {
        imagepng($image, $filename, 0);
    }
}

?>