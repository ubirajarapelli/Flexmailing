<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
	function deletar(){
		var confirma = confirm("Essa ação é irreversível. Tem certeza que deseja continuar?");
		if (confirma)  
        	return true;  
    	else  
        	return false;  
	}

	function checkAll(o){
		var boxes = document.getElementsByTagName("input");
		for (var x=0;x<boxes.length;x++){	
			var obj = boxes[x];
			if (obj.type == "checkbox"){
				if (obj.name!="chkAll") obj.checked = o.checked;
			}			
		}		
	}

	function checkBox() {
		// Procura em todos os elementos com a classe cinput na página.
		$(".checkbox:checked").each(function(){
			var campos = new Array();
			campos.push($(this).val());
			for (var i=0; i < campos.length; i++) {
		      	var inpt = '<td>' + campos[i] + '</td>';
		      	var slct = campos[i] + ",";
		      	//slct.toString();
		      	//slct = slct.substring(0,(slct.length - 1));
		      	$("#th").append(inpt);
		      	$("#p").append(slct);
		      	//$("#p").attr("value", slct);
			}
		});
	}
</script>