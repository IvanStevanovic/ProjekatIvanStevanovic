<h1 align="center">Hvala na poverenju!</h1>
<h3 align="center">Uspesno ste narucili proizvode</h3>
<a href=".././.././index.php">Pocetna</a>
<table width="40%" border="2" align="center" cellpadding="7" cellspacing="7">
    <tr>
        <td><strong>Slika proizvoda</strong></td>
        <td><strong>Proizvod</strong></td>
        <td><strong>Kolicina</strong></td>
        <td><strong>Cena</strong></td>
    </tr>
    <?php
   include "../../common.inc";
   session_start();
           
            $db_link=  db_connect();
            $racun=0; 
            $id_korisnika=$_SESSION['id_korisnika'];
            $datumm=date('Y-m-d');
            $broj_porudzbenice=$_SESSION['broj_porudzbenice'];
            $query= "select * from porudzbine where korisnik_id='$id_korisnika' and datum_n='$datumm' and broj='$broj_porudzbenice'";
            $result=  mysql_query($query,$db_link);
            while($row = mysql_fetch_array($result)){
                $artikal_id=$row['artikal_id'];
                $redni_br=$row['por_id'];
                $query2="select * from artikli where artikal_id='$artikal_id'";
                $result2=  mysql_query($query2,$db_link);
                $row2=  mysql_fetch_array($result2);
                $kolicina= $row["kolicina"];
                $picture=$row2['image_url'];
                $f="";
                $c=  substr_replace($picture, $f,0,9);
                $t=".." . "$c";
  
            ?>
    <tr>
        <td align="center"><img src="<?php echo "$t";?>" width="40" height="40" border="0"/></td>
        <td><?php echo $row2["naziv"];?></td><td><?php echo $kolicina;?></td>
        <td><?php echo $row2['cena']; $racun=$racun+$row2["cena"]*$kolicina;?></td>
       
    </tr>
    <?php
            }
    ?>
    <tr>
        <td colspan="6" align="right">Ukupna cena:&nbsp;<?php echo $racun;?></td> 
    </tr>
</table>
