<?php 
    include 'application/views/header_empresa.php';
?>

<div class="container 10">
  <br><br> 
  <h2>Completa Registro de la empresa </h2>
  <form  class="p-5 mt-5 formulario-contacto" action="http://localhost:8080/ONE_JOB_BUENO/index.php/welcome/registro"  method="POST">
    <div class="form-group ">
      <label name="direccion">Direccion postal de la empresa</label>
      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Escriba la direccion de la empresa">
    </div>
    <div class="form-group">
      <label name="mail">Jornana que desea llevar</label>
      <input type="email" class="form-control" id="mail" placeholder="Escriba su correo" name="mail">
    </div>
      <div class="form-group">
      <label name="nombre-puesto">Nombre del puesto que solicita</label>
      <input type="text" class="form-control" id="nombre-puesto" placeholder="Escribe el nombre del puesto que requiere" name="grado-est">
    </div>

      <div class="form-group">
      <label name="des">Descripcion del puesto mencionado</label>
      <input type="text" class="form-control" id="des" placeholder="Describe el puesto que solicitas" name="habilidades">
    </div>

  <div class="form-group">
      <label name="salario">Rango</label>
      <input type="text" class="form-control" id="salario" placeholder="Escribe el salario que pagaras" name="salario">
    </div>

     <div class="form-group">
      <label for="medio">Selecciona horario:</label>
             <select class="form-control" id="horario" name="horario">
                        <option value="horario1">6am - 2pm</option>
                        <option value="harario2">2pm - 10pm</option>
                        <option value="horario3">10pm - 6am</option>
                      
             </select>
    </div>

 
    <button type="submit" class="btn btn-primary btn-default btn-success btn-lg">Completar datos      </button>


    
  </form>

</div>











<?php 
    include 'application/views/footer.php';
?>