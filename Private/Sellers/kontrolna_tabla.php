<h1 align="center">Kontrola tabla</h1>;
<table border="0" align="center" width="40%"><tr><td align="right"><a href="./.././logout.php">Logout</a><font>/</font><a href="kontrolna_tabla.php">Pocetna</a></tr></table>
<table border="2" cellpadding="7" cellspacing="7" width="40%" align="center">
    <tr align="center"><td><a href="dodaj_kategoriju.php">Dodaj kategoriju</a></td>
        <td><a href="dodaj_proizvod.php">Dodaj proizvod</a></td>
        <td><a href="dodaj_izlog.php">Postavi na izlog</a></td>
        <td><a href="pregled_narudzbenica.php">Pregled narudzbenica</a></td>        
    </tr>
</table>
<br />
<table border="2" cellpadding="7" cellspacing="7" width="40%" align="center">
    <tr align="center"><td><b>Slika</b></td><td><b>Naziv</b></td><td><b>Kategorija</b></td>
        <td><b>Cena</b></td><td><b>Obrisi</b></td><td><b>Promeni</b></td>       
    </tr>
    <?php
    include "../../common.inc";
    $db_link=  db_connect();
    $query = "select * from artikli";
    $result=  mysql_query($query);
    while($row=  mysql_fetch_array($result)){
        $id_kategorije=$row['kategorija'];
        $id_proizvoda=$row['artikal_id'];
        $slika="../../".$row['image_url'];
       
    ?>
    <tr align="center"><td><img src="<?php echo "$slika";?>" width="50" height="50" border="0"/></td>
        <td><?php echo $row['naziv']; ?></td>
        <td>
            <?php
            $query2= "select * from kategorije where ID_KATEGORIJE='$id_kategorije'";
            $result2=  mysql_query($query2);
            $row2=  mysql_fetch_array($result2);
            echo $row2["KATEGORIJA"];
    ?>
        </td>
        <td><?php echo $row['cena'];?></td>
        <td><a href="<?php echo"obrisi_proizvod.php?id_proizvoda=$id_proizvoda";?>">Obrisi</a></td>
        <td><a href="<?php echo "promeni_proizvod.php?id_proizvoda=$id_proizvoda";?>">Promeni</a></td>
    </tr>
    <?php }?>
</table>
