<h1 align="center">Promena kolicine</h1>
<a href="../logout.php">Logout</a>
<table width="40%" border="2" align="center" cellpadding="7" cellspacing="7">
    <?php
    include "../../common.inc";
    $db_connect = db_connect();
    $redni_br = $_GET['redni_br'];
    $artikal_id= $_GET['artikal_id'];
    $query="select * from artikli where artikal_id='$artikal_id'";
    $result= mysql_query($query,$db_connect);
    $row= mysql_fetch_array($result);
    $id_kategorije= $row["kategorija"];
    ?>
    <form name="forma" action="<?php echo "update_proizvod.php?redni_br=$redni_br";?>"
          method="POST">
        <tr>
            <td colspan="2"><h3 align="center"><?php echo $row['naziv'];?></h3></td>
        </tr>
        <tr>
            <td>Kategorija</td><td>
                <?php
                $query2 = "select * from kategorije where ID_KATEGORIJE='$id_kategorije'";
                $result2=  mysql_query($query2,$db_connect);
                $row2=  mysql_fetch_array($result2);
                echo $row2["KATEGORIJA"];
                ?>
            </td>
        </tr>
        <tr><td>Cena</td><td><?php echo $row['cena'];?></td></tr>
        <tr><td>Opis</td><td><?php echo $row['beleske'];?></td></tr>
        <tr><td>Kolicina</td><td><input name="kolicina" type="text" class="st3"
          id="kolicina" value="<?php echo $_GET['kolicina'];?>" size="5"/></td>
        </tr>
        <tr><td colspan="2" align="right"><input name="dugme" type="submit" id="dugme" value="Prmoeni kolicinu"/></td></tr>
    </form>
</table>
