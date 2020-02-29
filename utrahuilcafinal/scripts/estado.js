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
 $.post("../ajax/estados.php?op=selectVacantes", function(r){
             $("#idvacante").html(r);
             $('#idvacante').selectpicker('refresh');
});

//Cargar los casus segun la agencia que se seleccione
    $("#idvacante").change(function(){
        $("#idvacante option:selected").each(function(){
            var idvacante = $(this).val();
            $.post("../ajax/estados.php?op=Selecthojavida", { idvacante : idvacante }, function(data){
                $("#idhoja").html(data);
                $("#idhoja").selectpicker('refresh');
            });
        });
    });

  $("#imagenmuestra").hide();
}

//Función limpiar
function limpiar()
{

$("#idvacante").val("");
$("#idhoja").val("");
$("#idUsuario").val("");
$("#descripcion").val("");
$("#estadoActual").val("");
$("#fecha").val("");
$("#hora").val("");
$("#idestado").val("");


var now = new Date();
var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);
var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
$('#fecha').val(today);
    
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
                'csvHtml5'
            ],
    "ajax":
        {
          url: '../ajax/estados.php?op=listar',
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
    url: "../ajax/estados.php?op=guardaryeditar",
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

function mostrar(idestado)
{
  $.post("../ajax/estados.php?op=mostrar",{idestado : idestado}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

$("#idvacante").val(data.idvacante);
$('#idvacante').selectpicker('refresh');
$("#idhoja").val(data.idhoja);
$('#idhoja').selectpicker('refresh');
$("#idUsuario").val(data.idUsuario);
$('#idUsuario').selectpicker('refresh');
$("#descripcion").val(data.descripcion);
$("#estadoActual").val(data.estadoActual);
$("#fecha").val(data.fecha);
$("#hora").val(data.hora);
$("#idestado").val(data.idestado);

  })
}

//Función para desactivar registros
function desactivar(idestado)
{
  bootbox.confirm("¿Está Seguro de desactivar la hoja de vida?", function(result){
    if(result)
        {
          $.post("../ajax/estados.php?op=desactivar", {idestado : idestado}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idestado)
{
  bootbox.confirm("¿Está Seguro de activar la hoja de vida?", function(result){
    if(result)
        {
          $.post("../ajax/estados.php?op=activar", {idestado : idestado}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

function eliminar(idestado)
{
  bootbox.confirm("¿Está Seguro de eliminar la hoja de vida?", function(result){
    if(result)
        {
          $.post("../ajax/estados.php?op=eliminar", {idestado : idestado}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();