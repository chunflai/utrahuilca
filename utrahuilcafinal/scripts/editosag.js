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
  $("#descripccion").val("");
  $("#fecha").val("");
  $("#hora").val("");
  $("#ideditosAG").val("");
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
          url: '../ajax/editosage.php?op=listar',
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
    url: "../ajax/editosage.php?op=guardaryeditar",
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

function mostrar(ideditosAG)
{
  $.post("../ajax/editosage.php?op=mostrar",{ideditosAG : ideditosAG}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#imagenmuestra").show();
    $("#imagenmuestra").attr("src","../file1/"+data.imagen);
    $("#imagenactual").val(data.imagen);
    $("#descripccion").val(data.descripccion);
    $("#fecha").val(data.fecha);
    $("#hora").val(data.hora);
    $("#ideditosAG").val(data.ideditosAG);
  })
}

//Función para desactivar registros
function desactivar(ideditosAG)
{
  bootbox.confirm("¿Está Seguro de desactivar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/editosage.php?op=desactivar", {ideditosAG : ideditosAG}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(ideditosAG)
{
  bootbox.confirm("¿Está Seguro de activar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/editosage.php?op=activar", {ideditosAG : ideditosAG}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

function eliminar(ideditosAG)
{
  bootbox.confirm("¿Está Seguro de eliminar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/editosage.php?op=eliminar", {ideditosAG : ideditosAG}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();