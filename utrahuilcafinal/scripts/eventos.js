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
  $("#imagenactual").val("");
  $("#titulo").val("");
  $("#escrit").val("");
  $("#link").val("");
  $("#zona").val(""); 
  $("#fecha").val("");
  $("#hora").val("");
  $("#ideventos").val("");
   //Obtenemos la fecha actual
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
          url: '../ajax/eventos.php?op=listar',
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
    url: "../ajax/eventos.php?op=guardaryeditar",
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

function mostrar(ideventos)
{
  $.post("../ajax/eventos.php?op=mostrar",{ideventos : ideventos}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#imagenmuestra").show();
    $("#imagenmuestra").attr("src","../file1/"+data.imagen);
    $("#imagenactual").val(data.imagen);
    $("#titulo").val(data.titulo);
    $("#escrit").val(data.escrit);
    $("#link").val(data.link);
    $("#zona").val(data.zona);
    $("#fecha").val(data.fecha);
    $("#hora").val(data.hora);
    $("#ideventos").val(data.ideventos);
  })
}

//Función para desactivar registros
function desactivar(ideventos)
{
  bootbox.confirm("¿Está Seguro de desactivar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/eventos.php?op=desactivar", {ideventos : ideventos}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(ideventos)
{
  bootbox.confirm("¿Está Seguro de activar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/eventos.php?op=activar", {ideventos : ideventos}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

function eliminar(ideventos)
{
  bootbox.confirm("¿Está Seguro de eliminar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/eventos.php?op=eliminar", {ideventos : ideventos}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();