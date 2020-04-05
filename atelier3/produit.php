<?php
require_once("conn.php");
if (isset($_get['idcat']))
{
    $idcat=$_get['idcat'];
}
else{
    $idcat='2';
}
$req="select * from produits where ID_CAT=$idcat";
$rs=mysqli_query($conn,$req)
?>
<table border="1">
    <tr>
        <th>ID</th><th>des</th><th>prix</th><th>quantite</th><th>promo</th>
    </tr>
<?php  while($p=mysqli_fetch_assoc($rs))  ?>
<tr>
   <td> <?php echo($p['ID_PROD'])?></td>
   <td> <?php echo($p['DESIGNATION'])?></td>
   <td> <?php echo($p['PRIX'])?></td>
   <td> <?php echo($p['QUANTITE'])?></td>
   <td> <?php echo($p['PROMO'])?></td>
</tr>
<tr>
    
</tr>

</table>