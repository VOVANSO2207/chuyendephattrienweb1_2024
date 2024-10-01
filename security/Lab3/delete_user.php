<?php
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra xem người dùng có gửi yêu cầu POST không
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra token CSRF có hợp lệ hay không
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Invalid CSRF token');
    }

    // Kiểm tra nếu tồn tại ID người dùng trong yêu cầu
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        die('Invalid user ID');
    }

    // Lấy ID của người dùng từ form
    $id = $_POST['id'];

    if ($userModel->deleteUserById($id)) {
        header('Location: list_users.php');
        exit();
    } else {
        die('Failed to delete user.');
    }
} else {
    die('Invalid request method');
}
?>
