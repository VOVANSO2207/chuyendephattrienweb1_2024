<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
require_once 'mahoaID.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    // Giải mã ID user từ duong dan
    $_id = decodeId($_GET['id']);
    $user = $userModel->findUserById($_id); // Cập nhật người dùng hiện có
}
if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if (!preg_match("/^[A-Za-z0-9]{5,15}$/", $name)) {
        echo "Tên phải từ 5 đến 15 ký tự và chỉ chứa các ký tự A-Z, a-z, 0-9.<br>";
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{5,10}$/", $password)) {
        echo "Mật khẩu phải chứa chữ thường, chữ hoa, ký tự đặc biệt và phải từ 5 đến 10 ký tự.<br>";
    }

    if (preg_match("/^[A-Za-z0-9]{5,15}$/", $name) && preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{5,10}$/", $password)) {
        // Xử lý thêm hoặc cập nhật người dùng
        if (!empty($_POST['submit'])) {

            if (!empty($_id)) {
                $userModel->updateUser($_POST);
            } else {
                $userModel->insertUser($_POST);
            }
            header('location: list_users.php');
        }
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>

            <form name="userForm" method="POST" onsubmit="return validateForm()">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name']))
                        echo $user[0]['name'] ?>'>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>

        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>

    <script>
        // ham kiem tra 
        function validateForm() {
            var name = document.forms["userForm"]["name"].value;
            var password = document.forms["userForm"]["password"].value;

            var nameRegex = /^[A-Za-z0-9]{5,15}$/;
            if (!name.match(nameRegex)) {
                alert("Tên bắt buộc phải từ 5 đến 15 ký tự và chỉ chứa các ký tự A-Z, a-z, 0-9.");
                return false;
            }
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{5,10}$/;
            if (!password.match(passwordRegex)) {
                alert("Mật khẩu phải chứa chữ thường, chữ hoa, ký tự đặc biệt, và phải từ 5 đến 10 ký tự.");
                return false;
            }

            return true;
        }
    </script>

</body>

</html>