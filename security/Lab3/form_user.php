<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);//Update existing user
}
//if(!empty($_POST['submit'])){
    // kiem tra co id khong 
    //     if(!empty($_id)){
    //         $userVersion = $_POST['version'];
    //         // kiem tra xem phien ban ng dung co khop voi phien ban da duoc lay khong 
    //         if($userVersion == $user[0]['version']){
    //             // Cap nhat thong tin user
    //             $_POST['version'] = $userVersion;
    //             $userModel->updateUser($_POST);
    //             header('location: list_users.php');
    
    //         }
    //         else {
    //             // Them moi nguoi dung k co id 
    //             $userModel->insertUser($_POST);
    //             header('location: list_users.php');
    //         }
    //     }
    // }

if (!empty($_POST['submit'])) {

    if (!empty($_id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">

            <?php if ($user || !isset($_id)) { ?>
                <div class="alert alert-warning" role="alert">
                    User form
                </div>
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $_id ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
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
            <input class="hidden" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) 
    </div>
</body>
</html>