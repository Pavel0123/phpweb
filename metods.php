<?php


class metods {

    function login($login_usarname,$login_password)    {
        $json = file_get_contents('users.json');
        $data = json_decode($json);

        for ($x = 0;$x<sizeof($data);$x = $x + 1)   {
            if ($login_usarname === $data[$x]->username)    {
                if ($login_password === $data[$x]->password)    {
                    echo $data[$x]->username;
                    return true;
                }
            }
        }
        return false;

    }

    function registrace($login_usarname,$login_password)    {
        $json = file_get_contents('users.json');
        $data = json_decode($json);

        $data[] = ['username' => $login_usarname, 'password' => $login_password];

        file_put_contents('users.json', json_encode($data));
    }

    function loggedin() {
        if ($_SESSION['loggedIn'] ?? null === true) {
            return true;
        }
        return false;
    }
}