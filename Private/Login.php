<form method="post" action="<?php echo "login1.php";?>" onsubmit="formValidator()">
    <table width="318" border="1" align="center" cellpadding="7" cellspacing="7">
            <tr>
                <td><font size="4">UserName</font></td>
                <td><input type="text" name="Username" id="Username" size="20"/></td>
            </tr>
            <tr>
                <td><font size="4">Password</font></td>
                <td><input type="password" name="Password" id="Password" size="20"/></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><a href="<?php echo"Customers/unos_kupca.php";?>">New Account?</a>
                    <input type="submit" name="s" id="s" value="Login" />
                    <input type="reset" name="reset" id="r" value="Reset"/></td>
                
            </tr>

        </table>
</form>
<script type="text/javascript">
window.formValidator = function() {
    var user = document.getElementById('Username');
    var pas = document.getElementById('Password');
    if(user.value.length == 0)
    {
        alert("Morate uneti ime");
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
<script type="text/javascript">
window.formica=function(){
    var user=document.getElementById('Username');
    var pass=document.getElementById('Password');
    if(notEmpty(user, "Unesite vase ime!")){
        if(notEmpty(pass, "Unesite vas password")){
            return true;
        }
    }
    return false;
    function notEmpty(elem,helperMsg){
        if(elem.value.length==0){
            alert(helperMsg);
            elem.focus();
            return false;
        }
        return true;
    }
}
</script>
