<?php 
    include 'application/views/header_candidato.php';
?>

<div class="container 10">
  <br><br> 
  <h2>Completa Registro del candidato</h2>
  <form  class="p-5 mt-5 formulario-contacto" action="http://localhost:8080/ONE_JOB_BUENO/index.php/welcome/registro"  method="POST">
    <div class="form-group ">
      <label name="retribucion">Retribucion minima solicitada</label>
      <input type="text" class="form-control" id="retribucion" name="retribucion" placeholder="Escriba el salario que desea">
    </div>
    <div class="form-group">
      <label name="jornada">Jornana que desea llevar</label>
      <input type="text" class="form-control" id="jornada" placeholder="Escriba su jornada" name="jornada">
    </div>
      <div class="form-group">
      <label name="grado-est">Maximo grado de estudios</label>
      <input type="text" class="form-control" id="grado-est" placeholder="Escribe tu maximo grado de estudios" name="grado-est">
    </div>

      <div class="form-group">
      <label name="habilidades">Habilidades que posee</label>
      <input type="text" class="form-control" id="habilidades" placeholder="Escribe las habilidades que posee" name="habilidades">
    </div>

  <div class="form-group">
      <label name="foto">Foto</label>
      <input type="text" class="form-control" id="login" placeholder="Login" name="login">
    </div>

 
    <button type="submit" class="btn btn-primary btn-default btn-success btn-lg">Completar datos      </button>


    
  </form>

</div>











<?php 
    include 'application/views/footer.php';
?>