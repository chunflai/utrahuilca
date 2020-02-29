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
  $("#descripcion").val("");
  $("#formacionAcademica").val("");
  $("#ConocimientosBasicos").val("");
  $("#dhabilidades").val("");
  $("#requisitos").val("");
  $("#funcionesPrincipales").val("");
  $("#Experiencias").val("");
  $("#TipoContrato").val("");
  $("#salario").val("");
  $("#jornadaLavoral").val("");
  $("#fecha").val("");
  $("#hora").val("");
  $("#idcomvocatorias").val("");
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
          url: '../ajax/comvocaorias.php?op=listar',
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
    url: "../ajax/comvocaorias.php?op=guardaryeditar",
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

function mostrar(idcomvocatorias)
{
  $.post("../ajax/comvocaorias.php?op=mostrar",{idcomvocatorias : idcomvocatorias}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

    $("#imagenmuestra").show();
    $("#imagenmuestra").attr("src","../file1/"+data.imagen);
    $("#imagenactual").val(data.imagen);
    $("#titulo").val(data.titulo);
    $("#descripcion").val(data.descripcion);
    $("#formacionAcademica").val(data.formacionAcademica);
    $("#ConocimientosBasicos").val(data.ConocimientosBasicos);
    $("#habilidades").val(data.habilidades);
    $("#requisitos").val(data.formacionAcademica);
    $("#funcionesPrincipales").val(data.funcionesPrincipales);
    $("#Experiencias").val(data.Experiencias);
    $("#TipoContrato").val(data.TipoContrato);
    $("#salario").val(data.salario);
    $("#jornadaLavoral").val(data.jornadaLavoral);
    $("#fecha").val(data.fecha);
    $("#hora").val(data.hora);
    $("#idcomvocatorias").val(data.idcomvocatorias);
  })
}

//Función para desactivar registros
function desactivar(idcomvocatorias)
{
  bootbox.confirm("¿Está Seguro de desactivar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/comvocaorias.php?op=desactivar", {idcomvocatorias : idcomvocatorias}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idcomvocatorias)
{
  bootbox.confirm("¿Está Seguro de activar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/comvocaorias.php?op=activar", {idcomvocatorias : idcomvocatorias}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

function eliminar(idcomvocatorias)
{
  bootbox.confirm("¿Está Seguro de eliminar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/comvocaorias.php?op=eliminar", {idcomvocatorias : idcomvocatorias}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();