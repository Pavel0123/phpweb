<?php


$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;
$metody = new metods();

if($username != null && $password != null)   {
    $metody->registrace($username,$password);
    echo "register succes";
}

?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
<a href="/Login">Login</a>
