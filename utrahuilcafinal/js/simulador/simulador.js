
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
		var tasa=4.45;
		var texto="";
		var periodo;
		if (!plazo){
			texto="<div class='alert alert-warning alert-dismissible fade show'>No se puede realizar la simulación, el plazo no puede estar vacio</strong></div>";
		    $('#cuota').html(texto);
			return;
		}
		if (!monto){
			texto="<div class='alert alert-warning alert-dismissible fade show'>No se puede realizar la simulación, el monto no puede estar vacio</strong></div>";
		    $('#cuota').html(texto);
			return;
		}
		switch(true) {
			case plazo>0 && plazo<=89:
			//especial
			
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0;
				
				break;
				case monto>=1000000 && monto<=4999999:tasa+=0.1;	
				
				break;
				case monto>=5000000 && monto<=19999999:tasa+=0.6;
				
				break;
				case monto>=20000000 && monto<=49999999:tasa+=1.2;	
				break;		
				case monto>=50000000:tasa=1.2;	
				break;   
			}
			break;
			case plazo>89 && plazo<=119:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0.1;
				break;
				case monto>=1000000 && monto<=4999999:tasa+=0.6;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.1;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=1.7;	
				break;		
				case monto>=50000000:tasa+=1.95;console.log('aquiestoy');	
				break;   
			}
			break;
			case plazo>119 && plazo<=149:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0.1;
				break;
				case monto>=1000000 && monto<=4999999:tasa+=0.7;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.2;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=1.8;	
				break;		
				case monto>=50000000:tasa+=2.0;	
				break;   
			}
			break;
			case plazo>149 && plazo<=179:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0.2;
				break;
				case monto>=1000000 && monto<=4999999:tasa+=0.8;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.3;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=1.9;	
				break;		
				case monto>=50000000:tasa+=2.2;	
				break;   
			}
			break;
			case plazo>179 && plazo<=209:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0.3;
				break;
				case monto>=1000000 && monto<=4999999:tasa+=1.0;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.5;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=2.1;	
				break;		
				case monto>=50000000:tasa+=2.2;	
				break;   
			}
			break;
			case plazo>209 && plazo<=239:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0.3;
				break;
				case monto>=1000000 && monto<=4999999:tasa+=1.1;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.6;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=2.2;	
				break;		
				case monto>=50000000:tasa+=2.5;	
				break;   
			}
			break;
			case plazo>239 && plazo<=269:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0.4;
				break;
				case monto>=1000000 && monto<=4999999:tasa+=1.2;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.7;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=2.3;	
				break;		
				case monto>=50000000:tasa+=2.6;	
				break;   
			}
			break;
			case plazo>269 && plazo<=359:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa+=0.5;
				break;
				case monto>=1000000 && monto<=4999999:tasa+=1.3;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.8;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=2.4;	
				break;		
				case monto>=50000000:tasa+=2.9;	
				break;   
			}
			break;
			case plazo>359:
			//especial
			switch(true) {
				case monto>=0 && monto<=999999:tasa=0.5;
				break;
				case monto>=1000000 && monto<=4999999:tasa=1.3;	
				break;
				case monto>=5000000 && monto<=19999999:tasa+=1.8;
				break;
				case monto>=20000000 && monto<=49999999:tasa+=2.6;	
				break;		
				case monto>=50000000:tasa+=3;	
				break;   
			}
			break;
		}
		
		
		periodo=360/plazo;
		tasa2=periodo*(Math.pow(((tasa/100)+1),(1/periodo))-1);//tasaefectiva anominal
		console.log(tasa2);
		var tnv=tasa2*100;//tasa nominal vencida
		var ganado=Math.round(monto*tasa2/periodo);
		texto="<div class='ahorro'>"+
		"El valor invertido es $"+convertir(monto)+"<br/>"+
		"La Tasa Efectiva del CDAT es del "+tasa+"%<br/>"+
		"La Tasa nominal vencida es del "+tnv.toFixed(2)+"%<br/>"+		
		"El plazo es de "+plazo+" dias <br/>"+ 
		"Al finalizar el CDAT recibirá un rendimiento por $"+convertir(ganado)+"<br/>"+
		"Se debe descontar la retención de $"+convertir(Math.round(ganado*0.07))+
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
		var tasax=0;
		var tasap=0;
		var tna=0;
		var periodos=12;
		if (tipo=="J"){
		   seleccion=document.getElementById("sjuridico");
			
		}
		if (tipo=="N"){
		   seleccion=document.getElementById("snatural");	
		}
		if (tipo==""){
			texto="<div class='alert alert-warning alert-dismissible fade show'>Seleccione el tipo de cliente</div>";
			$('#cuota').html(texto);		  
			return;  
		}
	   	monto_max=montos[seleccion.options[seleccion.selectedIndex].value]*SMMLV;			
		plazo_max=plazos[seleccion.options[seleccion.selectedIndex].value];
		if (monto > monto_max){
			texto="<div class='alert alert-warning alert-dismissible fade show'>No se puede realizar la simulación, el monto solicitado no puede ser mayor a <strong>$"+convertir(monto_max)+" </strong></div>";
		    $('#cuota').html(texto);
			return;
		}
		if (plazo > plazo_max){
			texto="<div class='alert alert-warning alert-dismissible fade show'>No se puede realizar la simulación, el plazo no puede ser mayor a <strong> "+plazo_max+" meses</strong></div>";
		    $('#cuota').html(texto);
			return;
		}
		// tasa=obtenerTasa(seleccion.options[seleccion.selectedIndex].value);
		var tasae=obtenerTasas(seleccion.options[seleccion.selectedIndex].value);
		if(seleccion.options[seleccion.selectedIndex].value!=""){
			tasax=periodos*(Math.pow(((tasae*1/100)+1),(1/periodos))-1);
		}
		else{
			texto="<div class='alert alert-warning alert-dismissible fade show'>No se puede calcular la tasa de interés, se debe seleccionar el tipo de crédito</div>";
			$('#cuota').html(texto);		  
			return;  
		}
        if(tasax>0 && plazo>0 && monto>=0){
            // Valor Cuota Mensual
            tna=tasax*100;
			tasa=tna/periodos/100;
			cuota= Math.round(monto * (tasa*(Math.pow((1+tasa),plazo))/(Math.pow((1+tasa),plazo)-1)) );
			//(D12*(H19*(1+H19)^D13))/(((1+H19)^D13)-1)
			texto="<div class='ahorro col-12'><div><strong>Monto: </strong>$"+convertir(monto)+"</div><div><strong>Plazo: </strong>"+plazo+" meses</div><div><strong>Cuota: </strong>$"+convertir(cuota)+"</div><div><strong>Tasa efectiva anual: </strong>"+tasae+"%</div><div><strong>Tasa nominal anual: </strong>"+tna.toFixed(2)+"%</div></div>";
			/*for (var c=0;c<=plazo;c++){
				texto+="<div class='row cuota'><div>"+c+"</div><div>$"+convertir(cuota)+"</div><div>$"+convertir(acapital)+"</div><div>$"+convertir(intereses)+"</div><div>$"+convertir(saldo)+"</div></div>";	
				intereses=Math.round(saldo*tasa);
				acapital=Math.round(cuota-intereses);
				saldo=Math.round(saldo-acapital);
				if (saldo <cuota+100) saldo=0;
			}*/
		}
		else {
			texto="<div class='alert alert-warning alert-dismissible fade show'>No se puede realizar la simulación, revise que los campos estén completos</div>";
			$('#cuota').html(texto);		  
			return;
		}
        $('#cuota').html(texto);
   }
   
   function obtenerTasas(tipo){
	   var tasap=0;
	   var tasac=0;
	   var tasae=0;
	   var codclas=0;
	   var codsub=0;
			switch(tipo) {
			case "1":
			//especial
			tasap=0;
			tasac=20.83;
			codclas=1;
			codsub=77;  
			break;
			case "8","11":
			//especial
			tasap=0;
			tasac=4.49;
			codclas=3;
			codsub=2;  
			break;
			case "10":
			//especial
			tasap=0;
			tasac=23,29;
			codclas=7;
			codsub=0;  
			break;
			case "5":
			//especial
			tasap=0;
			tasac=4,13;
			codclas=10;
			codsub=0;  
			break;
			case "13":
			//especial
			tasap=0;
			tasac=4,13;
			codclas=10;
			codsub=0;  
			break;
			case "0":
			//especial
			tasap=0;
			tasac=7,59;
			codclas=14;
			codsub=0;  
			break;
			case "9":
			//especial
			tasap=0;
			tasac=14,42;
			codclas=21;
			codsub=10;  
			break;
			case "4","3":
			//especial
			tasap=0;
			tasac=25,59;
			codclas=22;
			codsub=0;  
			break;
			case "12":
			//especial
			tasap=0;
			tasac=25,59;
			codclas=24;
			codsub=42;  
			break;
			case "6":
			//especial
			tasap=0;
			tasac=20,83;
			codclas=25;
			codsub=0;  
			break;
			case "7","15","16":
			//especial
			tasap=40;
			tasac=4,49;
			codclas=30;
			codsub=24;  
			break;
			case "2","14":
			//especial
			tasap=70;
			tasac=4,49;
			codclas=30;
			codsub=25;  
			break;
			case "3":
			//especial
			tasap=0;
			tasac=25,59;
			codclas=46;
			codsub=0;  
			break;
			case "4":
			//especial
			tasap=40;
			tasac=4,13;
			codclas=60;
			codsub=0;  
			break;
			
			
		}
		
		if(tasap!=0){
			tasae=tasac*(tasap/100)
		}else tasae=tasac;	
	return tasae;
		
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