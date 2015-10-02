<form action="<?php echo "unos_kupca_baza.php";?>" method="post" onsubmit="return formVali()">
    <table width="30%" border="2" cellpadding="7" cellspacing="7" align="center">
        <tr><td colspan="2" class="crveno"><font size='+1'>*obavezno popunite</font></td></tr>
        <tr><td align='right'><font size='4'>Ime(First Name)*:</font></td>
            <td><input name='firstname' type='text' id='fn'/></td></tr>
        <tr><td align='right'><font size='4'>Prezime(Last Name)*:</font></td>
            <td><input name='lastname' type='text' id='ln'/></td></tr>
        <tr><td align='right'><font size='4'>JMBG*:</font></td>
            <td><input name='jmbg' type='text' id='jmbg'/></td></tr>
        <tr><td align='right'><font size='4'>Adresa*:</font></td>
            <td><input name='adresa' type='text' id='adresa'/></td></tr>
        <tr><td align='right'><font size='4'>Username(6-8 characters)*:</font></td>
            <td><input name='username' type='text' id='un'/></td></tr>
        <tr><td align='right'><font size='4'>password*:</font></td>
            <td><input name='pass' type='password' id='pass'/></td></tr>
        <tr><td align='right'><input name='submit2' type='submit' value='sent'/></td>
            <td align='left'><input name='obrisi2' type='reset' value='delete' id='fn'/></td></tr>
               
        
    </table>
    
</form>
<script type="text/javascript">
window.formVali = function() {
    var user = document.getElementById('un');
    var pas = document.getElementById('pass');
    var jmbg = document.getElementById('jmbg');
    var adrs = document.getElementById('adresa');
    var name = document.getElementById('fn');
    var last = document.getElementById('ln');
    
    
    if(name.value.length == 0)
    {
        alert("Morate uneti ime");
        return false;
    }
    else if(last.value.length==0)
    {
        
        alert("Morate uneti prezime")
        return false;
    }
    else if(jmbg.value.length==0)
    {
        
        alert("Morate uneti jmbg")
        return false;
    }
    else if(adrs.value.length==0)
    {
        
        alert("Morate uneti adresu")
        return false;
    }
    else if(user.value.length==0)
    {
        
        alert("Morate uneti username")
        return false;
    }
    else if(pas.value.length==0)
    {
        
        alert("Morate uneti password")
        return false;
    }
    else 
    {
        return true
    }
}
</script>

