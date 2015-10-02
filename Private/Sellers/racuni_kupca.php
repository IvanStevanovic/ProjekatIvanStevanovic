<?php
$brojj=$_GET['broj_racuna'];
?>
<h1 align="center">Racun broj&nbsp<?php echo "$brojj";?></h1>;
<table border="0" align="center" width="40%"><tr><td align="right"><a href="./.././logout.php">Logout</a><font>/</font><a href="kontrolna_tabla.php">Pocetna</a></tr></table>
<table border="2" cellpadding="7" cellspacing="7" width="40%" align="center">
    <tr><td colspan="4" align="center"><font size="4" style="color:#F00">Podaci o proizvodima.</font></td></tr>
    <tr align="center"><td><b>Slika</b></td><td><b>Naziv</b></td><td><b>Cena</b></td><td><b>Komada</b></td></tr>
    <?php
    include "../../common.inc";
    $db_link=  db_connect();
    $id_korisnika=$_GET['id_korisnika'];
    $broj_racuna=$_GET['broj_racuna'];
    $query="select * from porudzbine where korisnik_id=$id_korisnika and broj=$broj_racuna";
    $result=  mysql_query($query);
    while($row=  mysql_fetch_array($result)){
        $artikal_id=$row['artikal_id'];
        $kolicina=$row['kolicina'];
        $query1="select * from artikli where artikal_id=$artikal_id";
        $result1=  mysql_query($query1);
        $row1=  mysql_fetch_array($result1);
        $slika="../../".$row1['image_url'];
        $naziv=$row1['naziv'];
        $cena=$row1['cena'];
        $ukupna_cena=$ukupna_cena+$cena*$kolicina;
    ?>
    <tr align="center"><td><img src="<?php echo "$slika"; ?>" width="50" height="50" border="0"/></td>
        <td><?php echo"$naziv"; ?></td>
        <td><?php echo"$cena";?></td>
        <td><?php echo"$kolicina";?></td>
    </tr>
    <?php
    }
    ?>
    <tr><td align="left"><b>Ukupna cena:</b></td>
        <td align="left" colspan="3"><?php echo"$ukupna_cena"; ?></td>
    </tr>
    <tr>
        <td colspan="4" align="center"><b>Podaci o kupcu</b></td>
    </tr>
    <?php
    $query3="select * from clanovi where ID=$id_korisnika";
    $result3=  mysql_query($query3);
    $row3=  mysql_fetch_array($result3);
    ?>
    <tr>
        <td align="left"><b>Ime:</b></td><td colspan="3"><?php echo $row3['IME']; ?></td>
    </tr>
    <tr>
        <td align="left"><b>Prezime:</b></td><td colspan="3"><?php echo $row3['PREZIME']; ?></td>
    </tr>
    <tr>
        <td align="left"><b>Adresa:</b></td><td colspan="3"><?php echo $row3['ADRESA']; ?></td>
    </tr>
</table>
