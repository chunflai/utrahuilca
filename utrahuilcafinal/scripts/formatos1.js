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
$("#archivoactual").val("");
$("#titulo").val("");
$("#idFormatosDian").val("");

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
      buttons: [  ],
    "ajax":
        {
          url: '../ajax/formatos1.php?op=listar',
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

function mostrar(idFormatosDian)
{
  $.post("../ajax/formatos1.php?op=mostrar",{idFormatosDian : idFormatosDian}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

$("#imagenmuestra").show();
$("#imagenmuestra").attr("src","../file1/"+data.archivo);
$("#archivoactual").val(data.archivo);
$("#titulo").val(data.titulo);
$("#idFormatosDian").val(data.idFormatosDian);

  })
}

init();