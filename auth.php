<?php
session_start();
$users = array(
    'admin' => array('password' => 'admin', 'role' => 'admin'),
    'user' => array('password' => 'user', 'role' => 'user'),
    'staff' => array('password' => 'staff', 'role' => 'staff')
);

function init_login() {
    global $users;

    if (isset($_POST['nama']) && isset($_POST['pass'])) {
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);

        if (isset($users[$n]) && $users[$n]['password'] === $p) {
            $_SESSION['login'] = $n;
            $_SESSION['time'] = time();
            
            if ($users[$n]['role'] === 'admin') {
                header('location: ./admin.php');
            } elseif ($users[$n]['role'] === 'user') {
                header('location: ./index.php');
            } elseif ($users[$n]['role'] === 'staff') {
                header('location: ./staff.php');
            }
            exit;
        } else {
            echo 'Nama/Password Tidak Sesuai';
            return false;
        }
    }
}


function validate() {
    if (!isset($_SESSION['login']) || !isset($_SESSION['time']) ) { 
    ?>
    <div class='container'>
        <h1 class='header1'>LOGIN</h1>
        <div class="login">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input class="input" type="text" name="nama" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input class="input" type="password" name="pass" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="button" type="submit" value="LOGIN" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <?php
    exit;
    }
    if (isset($_GET['m']) && $_GET['m'] == 'logout') {
    unset($_SESSION['login']) ;
    unset($_SESSION['time']) ;
    header('location: ./index.php');
    exit;
    }
}

?>