<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
$errors = [];


if (!empty($_GET['id'])) {
    $_id = base64_decode($_GET['id']);
    $user = $userModel->findUserById($_id);//Update existing user
}

function validate_name($name) {
    if (empty($name)) {
        return "Tên bắt buộc nhập.";
    }
    if (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        return "Tên phải có chiều dài từ 5 đến 15 ký tự, ký tự hợp lệ: A->Z, a->z, 0->9.";
    }
    return null;
}

function validate_password($password) {
    if (empty($password)) {
        return "Mật khẩu bắt buộc nhập.";
    }
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        return "Password phải có chiều dài từ 5 đến 10 ký tự, phải bao gồm: chữ thường (a->z), chữ HOA (A->Z), số (0-9) và ký tự đặc biệt: ~!@#$%^&*().";
    }
    return null;
}

if (!empty($_POST['submit'])) {

    $name_error = validate_name($_POST['name']);
    $password_error = validate_password($_POST['password']);

    if ($name_error) {
        $errors[] = $name_error; 
    }
    if ($password_error) {
        $errors[] = $password_error; 
    }

    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit; 
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
                <input class="form-control" name="name" placeholder="Name"
                    value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                <?php if (!empty($name_error)) { ?>
                <div class="text-danger"><?php echo $name_error; ?></div>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <?php if (!empty($password_error)) { ?>
                <div class="text-danger"><?php echo $password_error; ?></div>
                <?php } ?>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php } else { ?>
        <div class="alert alert-success" role="alert">
            User not found!
        </div>
        <?php } ?>
    </div>
</body>

</html>