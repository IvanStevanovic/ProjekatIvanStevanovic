<h1 align="center">Pregled narudzbenica</h1>;
<table border="0" align="center" width="35%"><tr><td align="right"><a href="./.././logout.php">Logout</a><font>/</font><a href="kontrolna_tabla.php">Pocetna</a></tr></table>
<table width="35%" align="center" cellpadding="7" cellspacing="7" border="2">
    <?php
    include "../../common.inc";
    $db_link=  db_connect();
    $query="SELECT broj,korisnik_id,datum_n from porudzbine where uspesno=1 group by broj";
    $result=  mysql_query($query);
    ?>
    <tr>
        <td><div align="left">Broj racuna</div></td>
        <td><div align="left">Kupac</div></td>
        <td><div align="left">Datum</div></td>
        <td>Obrisi narudzbenicu</td>
    </tr>
    <?php
    while($row=  mysql_fetch_array($result)){
        $id_korisnika=$row['korisnik_id'];
        $broj_racuna=$row['broj'];
        $datum=$row['datum_n'];
        $query1="select * from clanovi where ID='$id_korisnika'";
        $result1=  mysql_query($query1);
        $row1=  mysql_fetch_array($result1);
    
    ?>
    <tr>
        <td><div align="center">
                <?php
                //probao sam i sam $row['broj'] daje isti rezultat, pa mi bas nije jasno zasto je odradjen novi query
                
                $query3="SELECT * FROM porudzbine where korisnik_id='$id_korisnika' and broj='$broj_racuna' and datum_n='$datum'";
                $result3=mysql_query($query3);
                $row3=  mysql_fetch_array($result3);
                echo $row3['broj'];
                ?></div></td>
        <td><div align="left"><a href="<?php echo "racuni_kupca.php?id_korisnika=$id_korisnika &broj_racuna=$broj_racuna";?>"><?php echo $row1['IME'];?></a></div></td>
        <td><div align="center"><?php echo $row3['datum_n'] ?></div></td>
        <td><div align="center"><a href="<?php echo "obrisi_racun.php?broj_racuna=$broj_racuna"; ?>">Obrisi racun</a></td>
    </tr>
    
    <?php
    }
    ?>
</table>