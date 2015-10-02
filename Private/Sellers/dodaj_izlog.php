<h1 align="center">Dodaj u izlog</h1>;
<table border="0" align="center" width="40%"><tr><td align="right"><a href="./.././logout.php">Logout</a><font>/</font><a href="kontrolna_tabla.php">Pocetna</a></tr></table>
<form action="update_izlog.php" method="post" name="form1" id="form1">
    <table width="40%" align="center" cellpadding="7" cellspacing="7" border="2">
        <?php
        include "../../common.inc";
        $db_link=db_connect();
        $query1="Select * from artikli order by naziv";
        $result1=  mysql_query($query1);
        while($row1=  mysql_fetch_array($result1))
                {
            $artikal_izlog=$row1['artikal_id'];
            $picture="../../".$row1['image_url'];
                
        ?>
        <tr><td width="67"><div align="center"><img src="<?php echo "$picture";?>" width="50" height="50"/></div></td>
            <td colspan="2" width="241"><span><?php echo $row1['naziv'];?></td>
            <td width="20"><div align="center">
                <input type="checkbox" name="checkbox[]" value="<?php echo $artikal_izlog;?>"/>
                </div></td>
            </tr>
                <?php
                }
                ?>
            <tr>
                <td colspan="4"><div align="center">Odaberide proizvod koji ce biti u izlogu</td>
                </tr>
                <tr>
                    <td colspan="3"><div align="left"></div></td>
                    <td width="70"><div align="center">
                        <input name="submit" type="submit" value="OK"/>
                        </div></td>
                </tr>
    </table>
</form>