<?php



$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;
$metody = new metods();

if ($metody->login($username,$password) === true) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['loggedIn'] = true;
    header("location:/Main");
    exit();
}

?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
<a href="/Registrace">register</a>
