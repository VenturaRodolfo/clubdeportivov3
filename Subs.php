<?php
require_once 'header.php';
use Illuminate\Database\Capsule\Manager as Capsule;

error_reporting(E_ERROR | E_PARSE);
echo '
<center><h1 class="text" >Registrate y Unete a la familia</h1></center>
<form class="needs-validation" method="POST" novalidate>
<div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="validationCustom01" class="text" >Nombre: </label>
    <input type="text" name="name" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
       
    </div>
  </div>
</div>
<div class="col-md-6 mb-6">
<label for="exampleFormControlSelect1" class="text"> Eliga los Meses!</label>
<select name="mes" required>
  <option value="1mes">1 mes</option>
  <option value="2meses">2 mes</option>
  <option value="3meses">3 mes</option>
  <option value="4meses">4 mes</option>
</select>

<label for="exampleFormControlSelect1" class="text"> Eliga la categoria</label>
<select name="Cat" required>
  <option value="02-03">02-03</option>
  <option value="03-04">03-04</option>
  <option value="04-05">04-05</option>
  <option value="13-12">13-12</option>
</select>

<label for="exampleFormControlSelect1" class="text"> Eliga el coach</label>
<select name="Coach" required>
  <option value="Wara">Wara</option>
  <option value="Terrazas">Terrazas</option>
  <option value="Omar">Omar Escalante</option>
  <option value="Toro">Toro</option>
</select>
</div>
<div class="form-row">
  <div class="col-md-6 mb-3">
    <label for="validationCustom03" class="text" >Agrege una tarjeta</label>
    <input type="text" name="Card" class="form-control" id="validationCustom03" maxlength="16"  required>
    <div class="invalid-feedback">
    </div>
  </div>
</div>
<h2 for="validationCustom03" class="text" >precio por mes: $100 </h2>
<button class="btn btn-primary" type="submit">Enviar!</button>
</form>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
"use strict";
window.addEventListener("load", function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName("needs-validation");
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  });
}, false);
})();
</script>';
$name = $_POST['name'];
$mes =  $_POST['mes'];
$Cat = $_POST['Cat'];
$Coach = $_POST['Coach'];
$Card = $_POST['Card'];
$Precio = "100";
if ($mes == "1mes"){
 $Precio = "100";
}
elseif($mes == "2meses"){
    $Precio = "200";
}
elseif($mes == "3meses"){
    $Precio = "300";
}

elseif($mes == "4meses"){
    $Precio = "400";
}

if(isset($_POST['name']) && !empty($_POST['name']) &&
isset($_POST['mes']) && !empty($_POST['mes'])  &&
isset($_POST['Cat']) && !empty($_POST['Cat']) &&
isset($_POST['Coach']) && !empty($_POST['Coach']) &&
isset($_POST['Card']) && !empty($_POST['Card'])) 
{
  $iduser = Capsule::table('usuarios')->select(['idUsuarios'])->where('user', $user)->first();

  Capsule::table('sub_tiemp')->insert(['nombre' => $name, 'mes' => $mes,'pago' => $Precio, 'tarjeta'=> $Card,'Usuarios_idUsuarios' => $iduser->idUsuarios]);
  Capsule::table('sub_info')->insert(['Coach' => $Coach, 'categoria' => $Cat, 'sub_tiemp_nombre'=> $name]);

//queryMysql("INSERT INTO sub (nombre, mes,  pago, categoria, coach, tarjeta)VALUES ('$name', '$mes',  '$Precio', '$Cat', '$Coach', '$Card')");  
 echo ' <h1 class="text">SUSBCRIPCIÓN CON EXITO!!</h1>';
 
}
?>