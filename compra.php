<?php
require_once 'header.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$producto = $_POST["variable1"];
$numArt = $_POST["variable2"];
$Precio = $_POST["Precio"];
$talla = $_POST['talla'];
$cantidad = $_POST['cantidad'];
echo '<form  method="POST">
<center><h2 for="validationCustom03" class="text" >¿Confirmar compra?</h2>
<input type="hidden" name="des" value="1" />
<button class="button is-primary" type="submit">Confirmar</button></center>
<br><br><br><br><br>
</form>
';
echo $producto;
echo $Precio;
$des =$_POST['des'];

if ($des == 1){
        if(isset($_POST['variable1']) && !empty($_POST['variable1']) &&
        isset($_POST['Precio']) && !empty($_POST['Precio'])) 
        {
        $fecha = date(DATE_RFC2822);
        $iduser = Capsule::table('usuarios')->select(['idUsuarios'])->where('user', $user)->first();
        Capsule::table('ventaMERCH')->insert(['num_Art' => $numArt, 'precio' => $Precio, 'Usuarios_idUsuarios' => $iduser->idUsuarios, 'producto'=>$producto, 'fecha'=>$fecha]);
}
        /*queryMysql("INSERT INTO ventamerch (pedido, talla,  precio)
        VALUES ('$Pedido', '$talla',  '$Precio')"); */ 
   
        else{
            echo '<h1>Exitoso.  Puede regresar dando click aqui</h1>
           <a href="Merch.php" type="button" class="button is-primary">Regresar!</a>';

        }
        }
?>