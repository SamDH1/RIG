$(document).ready(function() {

     $('#rig_delete').click(function() {
	       var rdelete = document.getElementById("rigid").textContent;

                     var request = $.ajax({
   			url: "ajax/removeItemsFromRig.php",
   			type: "post",
   			data: { rdelete : rdelete}
   		});

   		// If we're successfull!
   		//request.done(function (response, textStatus, jqXHR){
   	
   		//});
	});


});


