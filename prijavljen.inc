<?php

session_start();     
$prijavaSkript="/ProjekatSeminarski/Private/Login.php";
$odjavaSkript="/ProjekatSeminarski/Private/Logout.php";
$skript=$prijavaSkript;
$nijePrijavljen=!isset($_SESSION['id_korisnika']);
if($nijePrijavljen)
    {
    $poruka="Login";
    $_SESSION['poruka']=$poruka;
    $_SESSION['skript']=$skript;
    }
    else
        {
        $poruka="Logout";
        $_SESSION['poruka']=$poruka;
        $skript=$odjavaSkript;
        $_SESSION['skript']=$skript;
        }
        
        
        
            
        