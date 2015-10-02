<table width="40%" align="center" border="1" cellpadding="7" cellspacing="7">
   <form action= "
          <?php
          session_start();
          if(isset($_SESSION['id_korisnika']))
          {
              
              $id_a=$_GET["id_a"];
              echo "private/customers/shopping.php?id_a=$id_a";
              
          }
          else{
              echo "private/login.php";
          }
              ?>
         " method="post" name="form2" id="form2">
       <tr><td colspan="3"><?php if(isset($_SESSION['id_korisnika']))
           {
           echo "<a href='Private/logout.php'>" ."Logout" ."</a>";
           }
           else
               {
               echo "<a href='Private/Login.php'>" ."Login" ."</a>";
               }?> &nbsp;<a href='index.php'><img src="images/add-to-cart-dark.png" height='30' width='30'</a></td></tr>
       <tr>
           <td colspan="3" class='crveno' align='center'><font size='+1'>
           <?php
           include"./common.inc";
           $db_link=  db_connect();
           $id_a=$_GET['id_a'];
           $query="select * from artikli where artikal_id = '$id_a'";
           $result=  mysql_query($query);
           $row=  mysql_fetch_array($result);
           $id_kategorija=$row['kategorija'];
           echo $row['naziv'];
           ?>
           </font>
           </td>
       </tr>
       <tr>
           <td align='right'><font size='4'>Kategorija:</font> </td>
           <td><font size='3'>
               <?php
               $query2="select * from kategorije where id_kategorije=$id_kategorija";
               $result2= mysql_query($query2,$db_link);
               $row2=  mysql_fetch_array($result2);
               $picture=$row['image_url'];
               echo $row2['KATEGORIJA'];
               ?>
               </font>
           </td>
           <td  rowspan="3"align='center' valign='middle'>
               <img src="<?php echo "$picture"?>" width="100" height="100"/>
           </td>
       </tr>
       <tr>
           <td align="rigt"><forn size="4">Cena:</forn></td>
   <td><font><?php echo $row['cena'];?></font></td>                         
       </tr>
       <tr>
           <td><font size="4">Garancija:</font></td>
           <td><font><?php echo $row['garancijab'];?> &nbsp;meseci.</font>
       </tr>
       <tr>
           <td align="right"><font size="4">Specifikacija:</font></td>
           <td colspan="2"><font><?php echo $row['beleske']; ?></font></td>
       </tr>
       <tr>
           <td align="right"><font size="4">Kolicina:</font></td>
           <td colspan="2"><strong><input name="kolicina" type="text" id="kolicina" value="1" size="5"/></strong></td>
       </tr>
       <tr><td align="right">&nbsp;
           
           </td>
           <td colspan="2" align="left"><input type="submit" id="dugme" name="dugme" value="KUPI!"/></td></tr>
   </form>
        
    
    
</table>
