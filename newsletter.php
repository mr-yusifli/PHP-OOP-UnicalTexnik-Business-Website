
<?php
session_start();
include_once("lib/fonksiyon.php");
$sinif = new kurumsal;

$response = array(
  'success' => false,
  'title' => 'Xəta!',
  'message' => 'Məlumat bazasına qoşulmaq mümkün olmadı.'
);

if (isset($_POST['email']) && !isset($_SESSION['abone_ekle'])) {
  $email = $_POST['email'];
  $ip_address = $_SERVER['REMOTE_ADDR'];

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    try {
      $stmt = $baglanti->prepare("INSERT INTO aboneler (email, ip_address) VALUES (:email, :ip_address)");
      $stmt->execute(['email' => $email, 'ip_address' => $ip_address]);
      $_SESSION['abone_ekle'] = true;

      $response = array(
        'success' => true,
        'title' => 'Əla!',
        'message' => 'Xəbər bülletenimize qoşuldunuz!'
      );
    } catch(PDOException $e) {
      $response['message'] = 'Məlumat bazasına qoşulmaq mümkün olmadı.';
    }
  } else {
    $response['message'] = 'Düzgün e-poçt ünvanı daxil edin.';
  }
} elseif (isset($_SESSION['abone_ekle'])) {
  $response['message'] = 'Daha önce abone oldunuz.';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
