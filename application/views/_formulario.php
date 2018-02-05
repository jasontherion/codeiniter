<form id="<?=$idform?>">

  <div class='form-group'>
    <label>Nombre del Contacto</label>
    <input type='text' class='form-control' placeholder='Nombre' name='nombre' maxlength='50' required='required' value='<?=$contacto['nombre']?>'/>
  </div>

  <div class='form-group'>
    <label>Dirección</label>
    <input type='text' class='form-control' placeholder='Dirección del contacto' name='direccion' maxlength='60' required='required' value='<?=$contacto['direccion']?>'/>
  </div>

  <div class='form-group'>
    <label>Teléfono</label>
    <input type='text' class='form-control' placeholder='Teléfono del contacto' name='telefono' maxlength='10' required='required' value='<?=$contacto['telefono']?>'/>
  </div>

  <div class='form-group'>
    <label>Correo Electronico</label>
    <input type='email' class='form-control' placeholder='Correo electronico del contacto' name='email' maxlength='50' required='required' value='<?=$contacto['email']?>'/>
  </div>

  <input type="hidden" name="id" value="<?=$contacto['id']?>">

  <button type='submit' class='btn btn-success pull-right'><?=$textbtn?></button>

  <button type='button' class='btn btn-default pull-right' data-dismiss='modal'>Cancelar</button>

</form>
