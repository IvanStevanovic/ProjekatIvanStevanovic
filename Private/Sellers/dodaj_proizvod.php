<h1 align="center">Unesi proizvod</h1>;
<table border="0" align="center" width="40%"><tr><td align="right"><a href="./.././logout.php">Logout</a><font>/</font><a href="kontrolna_tabla.php">Pocetna</a></tr></table>
<form action="<?php echo "unos_proizvoda.php";?>" method="post" name="form1" enctype='multipart/form-data' onsubmit="return formValli()">
    <table width="40%" align="center" cellpadding="7" cellspacing="7" border="2">
                    <tr><td width="31%"><div align="right">
                                <strong>Slika artikla: </strong> </div></td> 
                                <td colspan="2"><div align="left">
                                            <input name="fajl" type="file" id="file"/>
                                        </div></td>            
        </tr>
        <tr>
            <td><div align="right">Naziv:</div></td>
            <td colspan="2">
                <input name="naziv" type="text" id="naziv"/></td>
        </tr>
        <tr>
            <td><div align="right">Kategorija:</div></td>
            <td colspan="2">
                <?php
                include "../../common.inc";
                $db_link=  db_connect();
                $query="select * from kategorije order by KATEGORIJA";
                $result=  mysql_query($query);
               
                
               
                ?>
                <select name="kategorija" id="kategorija" option="$row['kategorija']">
                    <?php
                    while($row=  mysql_fetch_array($result)){
                $opci=$row["KATEGORIJA"];
                $vred=$row["ID_KATEGORIJE"];
                    echo "<option value=\"$vred\">".$opci."</option>";
                    }
                    ?>                   
                </select>&nbsp;
            </td>
        </tr>
        <tr>
            <td><div align="right">Garancija:</div></td>
            <td colspan="2"><input name="garancija" type="text" id="garancija"/>&nbsp;u mesecina</td>
        </tr>        
        <tr>
            <td><div align="right">Broj komada:</div></td>
            <td colspan="2"><input name="brkomada" type="text" id="brkomada"/></td>
        </tr>
        <tr>
            <td><div align="right">Beleske o proizvodu:</dvi></td>
            <td colspan="2"><textarea name="beleske" cols="50" rows="6" id="beleske"></textarea></td>
        </tr>
        <tr>
            <td><div align="right">Cena + PDV:</div></td>
            <td colspan="2"><input name="cena" type="text" id="cena"/></td>
        </tr>
        <tr>
            <td colspan="2"><div align="right"><input name="posalji" type="submit" id="posalji" value="Posalji"/></div></td>
            <td width="28%"><div align="left"><input name="otkazi" type="reset" id="otkazi" value="otkazi"/></div></td>
        </tr>
    </table>
</form>
<script type="text/javascript">
window.formValli = function() {
    var naziv = document.getElementById('naziv');
    var gar = document.getElementById('garancija');
    var br = document.getElementById('brkomada');
    var beleske = document.getElementById('beleske');
    var cena = document.getElementById('cena');
    
    
    
    if(naziv.value.length == 0)
    {
        alert("Morate uneti naziv");
        return false;
    }
    else if(gar.value.length==0)
    {
        
        alert("Morate uneti garanciju")
        return false;
    }
    else if(br.value.length==0)
    {
        
        alert("Morate uneti broj komada")
        return false;
    }
    else if(beleske.value.length==0)
    {
        
        alert("Morate uneti belesku")
        return false;
    }
    else if(cena.value.length==0)
    {
        
        alert("Morate uneti cenu")
        return false;
    }
    else 
    {
        return true
    }
}
</script>
