var tabla;

function init(){
  mostrarform(false);
  listar();

  $("#formulario").on("submit",function(e)
  {
    guardaryeditar(e);  
  })

   $.post("../ajax/titulacion.php?op=selectescolaridad", function(r){
        //Agencias
      $("#idescolaridad").html(r);
      $("#idescolaridad").selectpicker('refresh');
    });
}

//Función limpiar
function limpiar()
{
  $("#idescolaridad").val("");
  $("#nombreTitu").val("");
  $("#idtitulacion").val("");
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
          url: '../ajax/titulacion.php?op=listar',
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
    url: "../ajax/titulacion.php?op=guardaryeditar",
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

function mostrar(idtitulacion)
{
  $.post("../ajax/titulacion.php?op=mostrar",{idtitulacion : idtitulacion}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#idescolaridad").val(data.idescolaridad);
    $('#idescolaridad').selectpicker('refresh');
    $("#nombreTitu").val(data.nombreTitu);
    $("#idtitulacion").val(data.idtitulacion);
  })
}
//Función para desactivar registros
function desactivar(idtitulacion)
{
  bootbox.confirm("¿Está Seguro de desactivar esta titulacion?", function(result){
    if(result)
        {
          $.post("../ajax/titulacion.php?op=desactivar", {idtitulacion : idtitulacion}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}
//Función para activar registros
function activar(idtitulacion)
{
  bootbox.confirm("¿Está Seguro de activar el titulacion ?", function(result){
    if(result)
        {
          $.post("../ajax/titulacion.php?op=activar", {idtitulacion : idtitulacion}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();