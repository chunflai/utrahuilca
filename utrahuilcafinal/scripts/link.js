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
  $("#vlink").val("");
  $("#titulo").val("");
  $("#desrcipcion").val("");
  $("#hora").val("");
  $("#fecha").val("");
  $("#idlink").val("");
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
          url: '../ajax/link.php?op=listar',
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
    url: "../ajax/link.php?op=guardaryeditar",
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

function mostrar(idlink)
{
  $.post("../ajax/link.php?op=mostrar",{idlink : idlink}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#imagenmuestra").show();
    $("#imagenmuestra").attr("src","../filesN/"+data.imagen);
    $("#imagenactual").val(data.imagen);
    $("#vlink").val(data.vlink);
    $("#titulo").val(data.titulo);
    $("#desrcipcion").val(data.desrcipcion);
    $("#hora").val(data.hora);
    $("#fecha").val(data.fecha);
    $("#idlink").val(data.idlink);

  })
}

//Función para desactivar registros
function desactivar(idlink)
{
  bootbox.confirm("¿Está Seguro de desactivar esta link?", function(result){
    if(result)
        {
          $.post("../ajax/link.php?op=desactivar", {idlink : idlink}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idlink)
{
  bootbox.confirm("¿Está Seguro de activar el link ?", function(result){
    if(result)
        {
          $.post("../ajax/link.php?op=activar", {idlink : idlink}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

function eliminar(idlink)
{
  bootbox.confirm("¿Está Seguro de eliminar el link?", function(result){
    if(result)
        {
          $.post("../ajax/link.php?op=eliminar", {idlink : idlink}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();