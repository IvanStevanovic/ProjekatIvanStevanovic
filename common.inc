<?php
ini_set("display_errors", "1");
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$host = 'localhost';
$db_name = 'ITS_SIMPLE2';
$db_username = "root";
$db_password = '';
function db_connect()
{
    global $host,$db_name,$db_username,$db_password;
    $db_link= mysql_connect($host,$db_username,$db_password);
    $db_selectt = mysql_select_db($db_name, $db_link);
    if(!$db_link || !$db_selectt)
        { 
        return 0;
        }
        else
            {   
            return $db_link;
            }
        
}
