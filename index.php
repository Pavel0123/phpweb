<?php
include 'metods.php';
session_start();


$url =  $_SERVER['REQUEST_URI'];
$metody = new metods();

switch ($url){
    case '/Login':

        if ($metody->loggedin() == false)   {
            require 'login.php';
        }
        else    {
            header("location:/Main");
        }
    break;
    case '/Registrace':

        if ($metody->loggedin() == false)   {
            require 'registrace.php';
        }
        else    {
            header("location:/Main");
        }
    break;
    case '/Logout' :

        if ($metody->loggedin() == true)   {
            require 'Logout.php';
        }
        else    {
            header("location:/Login");
        }
    break;
     case '/Main' :

        if ($metody->loggedin() == true)   {
            require 'main.php';
        }
        else    {
            header("location:/Login");
        }
    break;
      default : require '404.php';
  }



