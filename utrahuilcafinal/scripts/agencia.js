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

  $("#Mapamuestra").hide();
}

//Función limpiar
function limpiar()
{

  $("#titulo").val("");
  $("#imagenmuestra").attr("src","");
  $("#imagenactual").val("");
  $("#direccion").val("");
  $("#telefono").val("");
  $("#horario").val("");
  $("#Mapa").val("");
  $("#LinkMapa").val("");
  $("#idagencia").val("");
  
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
          url: '../ajax/agencia.php?op=listar',
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
    url: "../ajax/agencia.php?op=guardaryeditar",
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

function mostrar(idagencia)
{
  $.post("../ajax/agencia.php?op=mostrar",{idagencia : idagencia}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#titulo").val(data.titulo);
    $("#imagenmuestra").show();
    $("#imagenmuestra").attr("src","../file1/"+data.imagen);
    $("#imagenactual").val(data.imagen);
    $("#direccion").val(data.direccion);
    $("#telefono").val(data.telefono);
    $("#horario").val(data.horario);
    $("#Mapamuestra").attr("src","../file1/"+data.Mapa);
    $("#Mapaactual").val(data.Mapa);
    $("#LinkMapa").val(data.LinkMapa);
    $("#idagencia").val(data.idagencia);
  })
}

//Función para desactivar registros
function desactivar(idagencia)
{
  bootbox.confirm("¿Está Seguro de desactivar la agencia?", function(result){
    if(result)
        {
          $.post("../ajax/agencia.php?op=desactivar", {idagencia : idagencia}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idagencia)
{
  bootbox.confirm("¿Está Seguro de activar la agencia?", function(result){
    if(result)
        {
          $.post("../ajax/agencia.php?op=activar", {idagencia : idagencia}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

function eliminar(idagencia)
{
  bootbox.confirm("¿Está Seguro de eliminar la agencia?", function(result){
    if(result)
        {
          $.post("../ajax/agencia.php?op=eliminar", {idagencia : idagencia}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();