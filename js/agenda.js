$( document ).ready(function(){

  $("body").on('click', '.nuevoContacto', function () {
    $.ajax({
      url: base_url + 'principal/formAddContacto',
      data: {},
      type: 'POST',
      success: function (html) {
        $(".modal-header").html('<span class="text-right" style="font-size:17px">Nuevo contacto</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="#FF0000"><i class="fa fa-times" aria-hidden="true"></i></font></span></button><br>');
        $(".modal-body").html(html);
        $(".modal-footer").html('');
        $("#Modal").modal("show");
      }
    });
  });



  $("body").on('submit', '#formNuevoContacto', function () {
    $("#Modal").modal("hide");
    $.ajax({
      url: base_url + 'principal/guardarContacto',
      data: $(this).serialize(),
      type: 'POST',
      success: function (resultado) {
        location.reload();
      }
    });
    return false;
  });



  $("body").on('click', '.btnedit', function () {
      var idContacto = $(this).data("id");
    $.ajax({
      url: base_url + 'principal/formEditContacto',
      data: {idContacto:idContacto},
      type: 'POST',
      success: function (html) {
        $(".modal-header").html('<span class="text-right" style="font-size:17px">Editar contacto</span><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><font color="#FF0000"><i class="fa fa-times" aria-hidden="true"></i></font></span></button><br>');
        $(".modal-body").html(html);
        $(".modal-footer").html('');
        $("#Modal").modal("show");
      }
    });
  });



  $("body").on('submit', '#formEditContacto', function () {
    $("#Modal").modal("hide");
    $.ajax({
      url: base_url + 'principal/editarContacto',
      data: $(this).serialize(),
      type: 'POST',
      success: function (resultado) {
        location.reload();
      }
    });
    return false;
  });



  $("body").on('click', '.btnEliminar', function () {
      var idContacto = $(this).data("id");
    $.ajax({
      url: base_url + 'principal/eliminarContacto',
      data: {idContacto:idContacto},
      type: 'POST',
      success: function (html) {

      }
    });
    $(this).closest('tr').remove();
  });




});
