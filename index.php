<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 align="center">Proizvodi</h1>
        <?php
      session_start();
      include "common.inc";
      $id_korr=$_SESSION["id_korisnika"];
      $db_link=  db_connect();
      $query5="select * from clanovi where ID = '$id_korr' ";
      $result5=  mysql_query($query5,$db_link);
      $row5=  mysql_fetch_array($result5);
      
        $nijeprij=!isset($_SESSION['id_korisnika']);
        if($nijeprij)      
        {
            
        echo "<a href='Private/Login.php'>" ."Login" ."</a>";
        }
        else
            {
            if($row5['TABELA']=='kupac'){
            
            echo "<a href='Private/logout.php'>" ."Logout" ."</a>"."<img src=\"images/add-to-cart-dark.png\" height=30 width=30>"; 
            
            }
            else
                {
                header("Location:/ProjekatSeminarski/Private/sellers/kontrolna_tabla.php");
                }
            }
        ?>
        <br>
    <table width="50%" align="center" cellpadding="12" cellspacing="12" border="2">
                
        <?php
     
     $query="select * from artikli where IZLOG = 1";
     $result = mysql_query($query,$db_link);
     $red = 0;
     echo "<tr>";
     while(($row=  mysql_fetch_array($result)) !=NULL){
         if($red % 3 == 0){
             echo "</tr>";
             echo "<tr>";
         }
         $id_a = $row["artikal_id"];
         $path_do_slike = $row["image_url"];
         echo "<td height=\"110\" valign=\"bottom\" align=\"center\">";
         echo "<img src=\"$path_do_slike\" valign=\"middle\" border=\"0\" width=\"202\" height=\"252\"><br>";
         echo $row["naziv"];
         echo "<br>";
         echo "<a href='specifikacija.php?id_a=$id_a'>"."Vise info...."."</a>";
         echo "<br><a href='Private/Customers/shopping.php?id_a=$id_a'>"."<img src=\"images/add-to-cart-dark.png\" height=50 width=50>"."</a>";
         
         echo "</td>";
         $red++;
         
     }
     
        ?>
    </table>
    </body>
</html>
