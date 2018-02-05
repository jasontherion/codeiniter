<h1>Agenda de contactos</h1>

<button class="nuevoContacto pull-right btn btn-success">Nuevo Contacto</button>
<br>
<br>
<table class="table table-striped table-bordered dt-responsive table-hover table-condensed">
  <tr>
    <th class="bg-primary">ID</th>
    <th class="bg-primary">NOMBRE</th>
    <th class="bg-primary">DIRECCIÓN</th>
    <th class="bg-primary">TELÉFONO</th>
    <th class="bg-primary">CORREO ELECTRONICO</th>
    <th class="bg-primary">ACCIONES</th>
  </tr>

  <?php
  if($contactos){
    foreach ($contactos as $contacto) {
      ?>
      <tr>
        <td><?=$contacto['id']?></td>
        <td><?=$contacto['nombre']?></td>
        <td><?=$contacto['direccion']?></td>
        <td><?=$contacto['telefono']?></td>
        <td><?=$contacto['email']?></td>
        <td class="text-center"><button class="btn btn-primary btn-sm btnedit" data-id="<?=$contacto['id']?>">Editar</button>  <button class="btn btn-danger btn-sm btnEliminar" data-id="<?=$contacto['id']?>">Eliminar</button></td>
      </tr>
      <?php
    }
  }
  ?>

</table>
