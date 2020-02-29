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
}

//Función limpiar
function limpiar()
{

$("#imagenmuestra").attr("src","");
$("#archivostactual").val("");
$("#Titulo").val("");
$("#horat").val("");
$("#fecha").val("");
$("#idcomunicados").val("");

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
          url: '../ajax/comunicados.php?op=listar',
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
    url: "../ajax/comunicados.php?op=guardaryeditar",
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

function mostrar(idcomunicados)
{
  $.post("../ajax/comunicados.php?op=mostrar",{idcomunicados : idcomunicados}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

$("#imagenmuestra").show();
$("#imagenmuestra").attr("src","../file1/"+data.archivost);
$("#archivostactual").val(data.archivost);
$("#Titulo").val(data.Titulo);
$("#horat").val(data.horat);
$("#fecha").val(data.fecha);
$("#idcomunicados").val(data.idcomunicados);
  })
}

//Función para desactivar registros
function desactivar(idcomunicados)
{
  bootbox.confirm("¿Está Seguro de desactivar el tarifas? ", function(result){
    if(result)
        {
          $.post("../ajax/comunicados.php?op=desactivar", {idcomunicados : idcomunicados}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idcomunicados)
{
  bootbox.confirm("¿Está Seguro de activar el tarifas ?", function(result){
    if(result)
        {
          $.post("../ajax/comunicados.php?op=activar", {idcomunicados : idcomunicados}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}


function eliminar(idcomunicados)
{
  bootbox.confirm("¿Está Seguro de eliminar el tarifas?", function(result){
    if(result)
        {
          $.post("../ajax/comunicados.php?op=eliminar", {idcomunicados : idcomunicados}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}



init();