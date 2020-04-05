<?php
$conn= mysqli_connect("localhost","root","","db_cat_dwmm") or die (mysqli_connect_error() );
$req="select * from categorie";
$rs=mysqli_query($conn,$req);
?>
<form>
    <select>
    <?php
    while($don=mysqli_fetch_array($rs)) 
       echo" <option value= '$don[0]' > $don[1]  </option>";
    ?>
    </select>
</form>
