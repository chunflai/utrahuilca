var tabla;

function init(){
  mostrarform(false);
  listar();

  $("#formulario").on("submit",function(e)
  {
    guardaryeditar(e);  
  })
}

//Función limpiar
function limpiar()
{
  $("#idUsuario").val("");
  $("#nombreV").val("");
  $("#idvacante").val("");
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
          url: '../ajax/vacante.php?op=listar',
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
    url: "../ajax/vacante.php?op=guardaryeditar",
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

function mostrar(idvacante)
{
  $.post("../ajax/vacante.php?op=mostrar",{idvacante : idvacante}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#idUsuario").val(data.idUsuario);
    $("#nombreV").val(data.nombreV);
    $("#idvacante").val(data.idvacante);
  })
}
//Función para desactivar registros
function desactivar(idvacante)
{
  bootbox.confirm("¿Está Seguro de desactivar esta vacante?", function(result){
    if(result)
        {
          $.post("../ajax/vacante.php?op=desactivar", {idvacante : idvacante}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}
//Función para activar registros
function activar(idvacante)
{
  bootbox.confirm("¿Está Seguro de activar el vacante ?", function(result){
    if(result)
        {
          $.post("../ajax/vacante.php?op=activar", {idvacante : idvacante}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();