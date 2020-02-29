var tabla;

//Función que se ejecuta al inicio
function init(){
  mostrarform(false);
  listar();

  $("#formulario").on("submit",function(e)
  {
    guardaryeditar(e);  
  })

  //Cargamos los items al select categoria
 $.post("../ajax/usuario.php?op=selectarea", function(r){
             $("#idArea").html(r);
             $('#idArea').selectpicker('refresh');

 });

$.post("../ajax/usuario.php?op=selectperfil", function(r){
             $("#idPerfil").html(r);
             $('#idPerfil').selectpicker('refresh');

 });

$.post("../ajax/usuario.php?op=permiso&id=", function(r){
             $("#permiso").html(r);
         
});

  $("#imagenmuestra").hide();
}

//Función limpiar
function limpiar()
{
  $("#registro").val("");
  $("#nombre").val("");
  $("#usuario").val("");
   $("#contrasenia").val("");
  $("#imagenmuestra").attr("src","");
  $("#imagenactual").val("");
   $("#idUsuario").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
  limpiar();
  if (flag)
  {
    $("#listadoregistros").hide();
    $("#formularioregistros").show();
    $("#btnGuardar").prop("disabled",false);
    $("#btnagregar").hide();
  }
  else
  {
    $("#listadoregistros").show();
    $("#formularioregistros").hide();
    $("#btnagregar").show();
  }
}

//Función cancelarform
function cancelarform()
{
  limpiar();
  mostrarform(false);
}

//Función Listar
function listar()
{
  tabla=$('#tbllistado').dataTable(
  {
    "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginación y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla
      buttons: [              
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
    "ajax":
        {
          url: '../ajax/usuario.php?op=listar',
          type : "get",
          dataType : "json",            
          error: function(e){
            console.log(e.responseText);  
          }
        },
    "bDestroy": true,
    "iDisplayLength": 5,//Paginación
      "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
  }).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
  e.preventDefault(); //No se activará la acción predeterminada del evento
  $("#btnGuardar").prop("disabled",true);
  var formData = new FormData($("#formulario")[0]);

  $.ajax({
    url: "../ajax/usuario.php?op=guardaryeditar",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,

      success: function(datos)
      {                    
            bootbox.alert(datos);           
            mostrarform(false);
            tabla.ajax.reload();
      }

  });
  limpiar();
}

function mostrar(idUsuario)
{
  $.post("../ajax/usuario.php?op=mostrar",{idUsuario : idUsuario}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#idArea").val(data.idArea);
    $('#idArea').selectpicker('refresh');
    $("#idPerfil").val(data.idPerfil);
    $('#idPerfil').selectpicker('refresh');
    $("#registro").val(data.registro);
    $("#nombre").val(data.nombre);
    $("#usuario").val(data.usuario);
    $("#contrasenia").val(data.contrasenia);
    $("#imagenmuestra").show();
    $("#imagenmuestra").attr("src","../usuarios/"+data.imagen);
    $("#imagenactual").val(data.imagen);
    $("#idUsuario").val(data.idUsuario);
   

  });

  $.post("../ajax/usuario.php?op=permiso&id=" +idUsuario, function(r){
             $("#permiso").html(r);
         
});
}

//Función para desactivar registros
function desactivar(idUsuario)
{
  bootbox.confirm("¿Está Seguro de desactivar el Usuario?", function(result){
    if(result)
        {
          $.post("../ajax/usuario.php?op=desactivar", {idUsuario : idUsuario}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idUsuario)
{
  bootbox.confirm("¿Está Seguro de activar el Usuario?", function(result){
    if(result)
        {
          $.post("../ajax/usuario.php?op=activar", {idUsuario : idUsuario}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

function eliminar(idUsuario)
{
  bootbox.confirm("¿Está Seguro de eliminar el Usuario?", function(result){
    if(result)
        {
          $.post("../ajax/usuario.php?op=eliminar", {idUsuario : idUsuario}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}



init();