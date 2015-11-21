

$(document).ready(function() { 

 $('#cat_sel').click(
                function(){
                     var id_cat=$('#cat_sel').val();
                     //   alert('sssssssssssssssssssss');		          
                         jQuery.ajax({
                           type: "POST",
                           url: '/ajax/productajax/getpodcatp' , 
                           data: "id_cat="+id_cat,
                           success: function(result) {
                           var data = JSON.parse(result);
		   $('#p_cat_sel').empty();
			   for(var i in data)
				jQuery('#p_cat_sel').append("<option value=" + i + ">" + data[i] + "</option>");
                                $("#p_cat_sel [value=sel_p]").attr("selected", "selected");
                          ///  jQuery('#p_cat_sel').append("<option value=sel_p >" + data.sel_p + "</option>");
                         //   $("#cat [value=sel_p]").attr("selected", "selected");
			}});
                });
		

	 

     $('#cat').click(
                function(){

			   var id_cat=$('#cat').val();
			   $('#addp').removeAttr('disabled');
			   $('#up').removeAttr("disabled");
			   $('#down').removeAttr("disabled");
                           jQuery.ajax({
                           type: "POST",
                           url: '/ajax/productajax/getpodcat' , 
                           data: "id_cat="+id_cat,
                           success: function(result) {
                           var data = JSON.parse(result);
			   $('#pod_cat').empty();
			   for(var i in data)
				jQuery('#pod_cat').append("<option value=" + i + ">" + data[i] + "</option>");
			}});
                    });
             
              

     $('#up').click(
                function(){
                   	   $('#up').attr("disabled", "disabled");
			   $('#down').attr("disabled", "disabled");
                           var id_cat=$('#cat').val();
                           jQuery.ajax({
                           type: "POST",
                           url: '/ajax/productajax/getaddprev' , 
                           data: "id_cat="+id_cat,
                           success: function(result) {
                           	var data = JSON.parse(result);
			   	$('#cat').empty();
			   	for(var i in data){

					if (i == 0)
						id_cat = data[i];
					else
						jQuery('#cat').append("<option value=" + data[i][0] + ">" + data[i][1] + "</option>");
				}
				$("#cat [value="+id_cat+"]").attr("selected", "selected");
				  $('#up').removeAttr("disabled");
			          $('#down').removeAttr("disabled");
			}});
                    });


	 $('#down').click(
                function(){
                   	   $('#up').attr("disabled", "disabled");
			   $('#down').attr("disabled", "disabled");
                           var id_cat=$('#cat').val();
                           jQuery.ajax({
                           type: "POST",
                           url: '/ajax/productajax/getaddnext' , 
                           data: "id_cat="+id_cat,
                           success: function(result) {
				 var data = JSON.parse(result);
			   	$('#cat').empty();
			   	for(var i in data){

					if (i == 0)
						id_cat = data[i];
					else
						jQuery('#cat').append("<option value=" + data[i][0] + ">" + data[i][1] + "</option>");
				}
				$("#cat [value="+id_cat+"]").attr("selected", "selected");
				$('#up').removeAttr("disabled");
			        $('#down').removeAttr("disabled")
			}});
				
                    });
              });