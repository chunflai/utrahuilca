
   function changeFunc() {
    var selectBox = document.getElementById("tcliente");
    var tipo = selectBox.options[selectBox.selectedIndex].value;
	console.log(tipo);
    switch(tipo) {
    case "N":
		$('#cnatural').addClass('visible');
        $('#cnatural').removeClass('oculto');
		$('#cjuridico').addClass('oculto');
        $('#cjuridico').removeClass('visible');
	break;
	case "J":
		$('#cjuridico').addClass('visible');
        $('#cjuridico').removeClass('oculto');
		$('#cnatural').addClass('oculto');
        $('#cnatural').removeClass('visible');
	break;	
   default:
	
	   $('#cjuridico').addClass('oculto');
		$('#cnatural').addClass('oculto');
		$('#cnatural').removeClass('visible');
		$('#cjuridico').removeClass('visible');
     break;   
   }
   }
   function calculaRendimiento(){
		var monto =parseInt($('#monto').val());
		var plazo =parseInt($('#plazo').val()); 
		var tasa2=0;
		var tasa=0;
		var texto="";
		switch(true) {
			case plazo>0 && plazo<=89:
			//especial
			
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.43;
				
				break;
				case monto>=1000000 && monto<=4999999:tasa=4.57;	
				
				break;
				case monto>=5000000 && monto<=19999999:tasa=5.05;
				
				break;
				case monto>=20000000 && monto<=49999999:tasa=5.62;	
				break;		
				case monto>=50000000:tasa=5.86;	
				break;   
			}
			break;
			case plazo>89 && plazo<=119:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.53;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=5.48;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.05;	
				break;		
				case monto>=50000000:tasa=6.28;	
				break;   
			}
			break;
			case plazo>119 && plazo<=149:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.57;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5.1;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=5.57;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.14;	
				break;		
				case monto>=50000000:tasa=6.38;	
				break;   
			}
			break;
			case plazo>149 && plazo<=179:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.62;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5.24;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=5.71;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.28;	
				break;		
				case monto>=50000000:tasa=6.52;	
				break;   
			}
			break;
			case plazo>179 && plazo<=209:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.72;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5.43;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=5.86;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.43;	
				break;		
				case monto>=50000000:tasa=6.57;	
				break;   
			}
			break;
			case plazo>209 && plazo<=239:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.76;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5.52;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=5.95;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.52;	
				break;		
				case monto>=50000000:tasa=6.85;	
				break;   
			}
			break;
			case plazo>239 && plazo<=269:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.81;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5.57;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=6.05;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.62;	
				break;		
				case monto>=50000000:tasa=6.95;	
				break;   
			}
			break;
			case plazo>269 && plazo<=359:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.91;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5.71;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=6.14;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.76;	
				break;		
				case monto>=50000000:tasa=7.19;	
				break;   
			}
			break;
			case plazo>359:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=4.95;
				break;
				case monto>=1000000 && monto<=4999999:tasa=5.86;	
				break;
				case monto>=5000000 && monto<=19999999:tasa=6.24;
				break;
				case monto>=20000000 && monto<=49999999:tasa=6.90;	
				break;		
				case monto>=50000000:tasa=7.28;	
				break;   
			}
			break;
		}
		console.log(tasa);
		tasa2=tasa/100;
		
		texto="<div class='ahorro'>"+
		"El valor invertido es $"+convertir(monto)+"<br/>"+
		"La Tasa Efectiva del CDAT es de "+tasa+"%<br/>"+  
		"El plazo es de "+plazo+" dias <br/>"+ 
		"Al finalizar el CDAT recibe intereses por $"+convertir(Math.round(monto*tasa2/30*plazo))+"<br/>"+
		"Se debe descontar la retención de $"+convertir(Math.round(monto*tasa2*4/100))+
		"</div>"
		$('#cuota').html(texto);
   }
   function calculaCuota(){
	    var selectBox = document.getElementById("tcliente");
		var tipo = selectBox.options[selectBox.selectedIndex].value;
		var seleccion;
		var monto_max;
		var plazo_max;
		var SMMLV=877803;
		var texto="";
		var cuota=0;
		var montos = [100,200,200,10,5,2000,20,20,200,108,220,200,5,2000,200,156];
		var plazos = [60,60,60,24,12,36,48,24,60,180,60,60,12,36,60,180];
		var monto =parseInt($('#monto').val());
		var plazo =parseInt($('#plazo').val());
		var saldo=monto;
		var intereses=0;
		var acapital=0;
		var tasa=0;
		if (tipo=="J"){
		   seleccion=document.getElementById("sjuridico");
			
		}
		if (tipo=="N"){
		   seleccion=document.getElementById("snatural");	
		}
		if (tipo==""){
			texto="<div class=error>Seleccione el tipo de cliente</div>";
			$('#cuota').html(texto);		  
			return;  
		}
	   	monto_max=montos[seleccion.options[seleccion.selectedIndex].value]*SMMLV;			
		plazo_max=plazos[seleccion.options[seleccion.selectedIndex].value];
		if (monto > monto_max){
			texto="<div class=error>No se puede realizar la simulación, el monto solicitado no puede ser mayor a <strong>$"+convertir(monto_max)+" </strong></div>";
		    $('#cuota').html(texto);
			return;
		}
		if (plazo > plazo_max){
			texto="<div class=error>No se puede realizar la simulación, el plazo no puede ser mayor a <strong> "+plazo_max+" meses</strong></div>";
		    $('#cuota').html(texto);
			return;
		}
		// tasa=obtenerTasa(seleccion.options[seleccion.selectedIndex].value);
	  
		if(seleccion.options[seleccion.selectedIndex].value!=""){
			tasa=obtenerTasa(seleccion.options[seleccion.selectedIndex].value);
		}
		else{
			texto="<div class=error>No se puede calcular la tasa de interés, se debe seleccionar el tipo de crédito</div>";
			$('#cuota').html(texto);		  
			return;  
		}
        if(tasa>0 && plazo>0 && monto>=0){
            // Valor Cuota Mensual
            cuota= Math.round(monto * ((tasa*(Math.pow((1+tasa),plazo)))/(Math.pow((1+tasa),plazo)-1)) );
			texto="<div class='row cuota head'><div>numero de cuota</div><div>valor de cuota</div><div>amortizacion</div><div>intereses</div><div>saldo</div></div>";
			for (var c=0;c<=plazo;c++){
				texto+="<div class='row cuota'><div>"+c+"</div><div>$"+convertir(cuota)+"</div><div>$"+convertir(acapital)+"</div><div>$"+convertir(intereses)+"</div><div>$"+convertir(saldo)+"</div></div>";	
				intereses=Math.round(saldo*tasa);
				acapital=Math.round(cuota-intereses);
				saldo=Math.round(saldo-acapital);
				if (saldo <cuota+100) saldo=0;
			}
		}
		else {
			texto="<div class=error>No se puede realizar la simulación, revise que los campos, Tipo de cliente, Tipo de crédito y Antigüedad tengan un valor seleccionado</div>";
			$('#cuota').html(texto);		  
			return;
		}
        $('#cuota').html(texto);
   }
   function obtenerTasa(tipo){
	   var tasa=0;
	   var seleccion=document.getElementById("antiguo");
		var antiguo=seleccion.options[seleccion.selectedIndex].value;
		switch(tipo) {
			case "13","5":
			//especial
			switch(antiguo) {
				case "A":tasa=0.34;
				break;
				case "B":tasa=0.31;	
				break;
				case "C":tasa=0.28;
				break;
				case "D":tasa=0.26;	
				break;		
				case "E":tasa=0.18;	
				break;   
			}
			break;
			case "3","4","12":
			//ultrarapido y lultraavance
			switch(antiguo) {
				case "A":tasa=1.92;
				break;
				case "B":tasa=1.89;	
				break;
				case "C":tasa=1.87;
				break;
				case "D":tasa=1.85;	
				break;		
				case "E":tasa=1.78;	
				break;   
			}
			break;
			case "7","0":
			//salud y educacion
			switch(antiguo) {
				case "A":tasa=0.61;
				break;
				case "B":tasa=0.58;	
				break;
				case "C":tasa=0.56;
				break;
				case "D":tasa=0.53;	
				break;		
				case "E":tasa=0.45;	
				break;   
			}
			break;
			case "1","10","8","11","6":
			//libre, bienes inmuebles, recreacion
			switch(antiguo) {
				case "A":tasa=1.59;
				break;
				case "B":tasa=1.56;	
				break;
				case "C":tasa=1.54;
				break;
				case "D":tasa=1.52;	
				break;		
				case "E":tasa=1.45;	
				break;   
			}
			break;
			case "2","14":
			//microcredilto
			console.log("aqui estoy")
			switch(antiguo) {
				case "A":tasa=1.76;
				break;
				case "B":tasa=1.73;	
				break;
				case "C":tasa=1.71;
				break;
				case "D":tasa=1.69;	
				break;		
				case "E":tasa=1.62;	
				break;   
			}
			break;
			case "9":
			switch(antiguo) {
				case "A":tasa=1.15;
				break;
				case "B":tasa=1.10;	
				break;
				case "C":tasa=1.08;
				break;
				case "D":tasa=1.05;	
				break;		
				case "E":tasa=0.98;	
				break;   
			}
			break;
			default:
			switch(antiguo) {
				case "A":tasa=1.15;
				break;
				case "B":tasa=1.10;	
				break;
				case "C":tasa=1.08;
				break;
				case "D":tasa=1.05;	
				break;		
				case "E":tasa=0.98;	
				break;   
			}
			break;
		}
		console.log(tasa+" "+tipo+" "+antiguo);
	   return tasa/100;
   }
   function convertir(numero){
  nnumero = numero+"";
    var op=nnumero.split("").reverse();
    var new1="";
    for(i=0;i<op.length;i++){
      if(i%3==0&&i!=0)
        new1="."+new1;
       new1=op[i]+new1;
    }
    return new1;
    //console.log(new1);
}