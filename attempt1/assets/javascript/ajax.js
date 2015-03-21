$(document).ready(function(){

	$('#post_blog').click(function(){
	 var toadd = $('#adding');			//grabbing the adding id

	 var form_data = {				//enter data in here
	 	 title: toadd.find("input[name ='title']").val,
	 	 highight: toadd.find("input[name='highlight]").val,
	 	 date: toadd.find("input[name='date']").val,
	 	 post_blog: toadd.find("input[name = 'date]").val,     
	 };

	 $.ajax({
	 	url: '../../blog_form/blog_validation.php',         
	 	data: form_data,
	 	dataType:'json',
	 	cache: false,
	 	method:'POST',
	 	success: function(response){   
	 		if(response.success){
	 			console.log('Everything seems to be all linked');
	 		} else {
	 			console.log('We are dealing with some problems right now');
	 		}
	 	  

	 	  //Dont paste anything inside the html document

	 	} //this closes the function success
	 });  //This closes the ajax
	}); //This closes the click function









});