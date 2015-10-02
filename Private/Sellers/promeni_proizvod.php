<h1 align="center">Promena proizvoda</h1>;
<table border="0" align="center" width="40%"><tr><td align="right"><a href="./.././logout.php">Logout</a><font>/</font><a href="kontrolna_tabla.php">Pocetna</a></tr></table>
<form action="<?php $id_proizvoda=$_GET['id_proizvoda']; echo "update_proizvod.php?id_proizvoda=$id_proizvoda";?>"
      method="post" id="form1" enctype='multipart/form-data'>
    <?php
    include "../../common.inc";
    $db_link=  db_connect();
    $id_proizvoda=$_GET['id_proizvoda'];
    $query="select * from artikli where artikal_id='$id_proizvoda'";
    $result=  mysql_query($query);
    $row=  mysql_fetch_array($result);
    $ime=$row['naziv'];
    $id_kategorije=$row['kategorija'];
    $slika="../../".$row["image_url"];
    $query2="select * from KATEGORIJE where ID_KATEGORIJE='$id_kategorije' order by KATEGORIJA";
    $result2=  mysql_query($query2);
    $row2=  mysql_fetch_array($result2);
    ?>
    <table width="40%" align="center" cellpadding="7" cellspacing="7" border="2">
        <tr>
            <td><div align="right">Slika proizvoda:</div></td>
            <td colspan="2"><img src="<?php echo"$slika";?>" alt="" width="100" height="100"/>
                <?php echo $id_proizvoda;?></td>
        </tr>
        <tr>
            <td width="31%"><div align="right">Slika proizvoda: </div></td>
            <td colspan="2"><div align="left"><input name="fls" type="file" id="fls"/></div></td>
        </tr>
        <tr>
            <td><div align="right">Naziv:</div></td>
            <td colspan="2"><span><input name="naziv" type="text" value="<?php echo $ime;?>" id="naziv"/></span></td>          
        </tr>
        <tr>
            <td>Postojeca kategorija</td>
            <td colspan="2"><input name="proizvodjac2" type="text" value="<?php echo $row2['KATEGORIJA'];?>" id="proizvodjac2" readonly="readonly"/></td>
        </tr>
        <tr>
            <td>Kategorija</td>
            <td colspan="2">
                <?php
                $query3="select * from kategorije order by KATEGORIJA";
                $result3=  mysql_query($query3);
                ?>
                <select name="kategorija" id="kategorija">
                    <?php
                    while($row3=  mysql_fetch_array($result3))
                {$sveKat=$row3['ID_KATEGORIJE'];
                        echo "<option value=\"$sveKat\">".$row3['KATEGORIJA']."</option>";
                }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><div align="right">Garancija:</div></td>
            <td colspan="2">
                <input name="garancija" type="text" id="garancija" value="<?php echo $row["garancijab"];?>"/>
                u mesecima</td>
        </tr>
        <tr>
            <td><div align="right">Beleske o proizvodu: </div></td>
            <td colspan="2"><textarea name="beleske" cols="50" rows="6" id="beleske"><?php echo $row['beleske']?></textarea></td>
        </tr>
        <tr>
            <td><div align="right">Broj komada:</div></td>
            <td colspan="2"><input name="brkomada" value="<?php echo $row['za_prodaju'];?>" type="text" id="brkomada"/></td>
        </tr>
        <tr>
            <td><div align="right">Cena + PDV:</div></td>
            <td colspan="2">
                <input name="cena" value="<?php echo $row['cena'];?>" type="text" id="cena"/>
            </td>
        </tr>
        <tr>
            <td colspan="2"><div align="right"><input name="posalji" type="submit" id="posalji" value="Posalji"/></div></td>
            <td width="28%"><div align="left"><input name="otkazi" type="reset" id="otkazi" value="otkazi"/></div></td>
        </tr>
    </table>
</form>
