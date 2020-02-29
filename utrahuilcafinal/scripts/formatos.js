var tabla;

//Función que se ejecuta al inicio
function init(){
  mostrarform(false);
  listar();

  $("#formulario").on("submit",function(e)
  {
    guardaryeditar(e);  
  })


  $("#imagenmuestra").hide();
  $("#imagenmuestra1").hide();
}

//Función limpiar
function limpiar()
{
  

$("#imagenmuestra").attr("src","");
$("#archivostactual").val("");
$("#imagenmuestra1").attr("src","");
$("#imagentactual").val("");
$("#descripccion").val("");
$("#horat").val("");
$("#fecha").val("");
$("#idformatos").val("");

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
                'csvHtml5',
                'pdf'
            ],
    "ajax":
        {
          url: '../ajax/formatos.php?op=listar',
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
    url: "../ajax/formatos.php?op=guardaryeditar",
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

function mostrar(idformatos)
{
  $.post("../ajax/formatos.php?op=mostrar",{idformatos : idformatos}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

$("#imagenmuestra").show();
$("#imagenmuestra").attr("src","../file1/"+data.archivost);
$("#archivostactual").val(data.archivost);
$("#imagenmuestra1").show();
$("#imagenmuestra1").attr("src","../file1/"+data.imagent);
$("#imagentactual").val(data.imagent);
$("#descripccion").val(data.descripccion);
$("#horat").val(data.horat);
$("#fecha").val(data.fecha);
$("#idformatos").val(data.idformatos);

  })
}

//Función para desactivar registros
function desactivar(idformatos)
{
  bootbox.confirm("¿Está Seguro de desactivar el formatos? ", function(result){
    if(result)
        {
          $.post("../ajax/formatos.php?op=desactivar", {idformatos : idformatos}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idformatos)
{
  bootbox.confirm("¿Está Seguro de activar el formatos ?", function(result){
    if(result)
        {
          $.post("../ajax/formatos.php?op=activar", {idformatos : idformatos}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}


function eliminar(idformatos)
{
  bootbox.confirm("¿Está Seguro de eliminar el formatos?", function(result){
    if(result)
        {
          $.post("../ajax/formatos.php?op=eliminar", {idformatos : idformatos}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}



init();