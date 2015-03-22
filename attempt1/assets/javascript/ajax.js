$(document).ready(function(){

	$('#post_blog').click(function(){
	 var toadd = $('#adding');			//grabbing the adding id

	 var form_data = {				//enter data in here
	 	 title: toadd.find("input[name ='title']").val(),
	 	 highlight: toadd.find("input[name='highlight']").val(),
	 	 date: toadd.find("input[name='date']").val(),
	 	 post_blog: toadd.find("textarea[name = 'blog']").val(),     
	 };

	 $.ajax({
	 	url: 'blog_validation.php',         
	 	data: form_data,
	 	dataType:'json',
	 	cache: false,
	 	method:'POST',
	 	success: function(response){   
	 		alert('we have recieved the data from the blog_validation');
	 		if(response.success === true){
	 			console.log('Everything seems to be all linked. Im going to now call the loadpage function');
	 			loadpage();
	 		} else {
	 			console.log('We are dealing with some problems right now');
	 		}
	 	  

	 	  //Dont paste anything inside the html document

	 	} //this closes the function success
	 });  //This closes the ajax
	}); //This closes the click function


	function loadpage(){
		$.ajax({
			url: 'retrieve_blog.php',
			dataType: 'json',
			cache: 'POST',
			success: function(response){
				
				if (response.success){
					$('.display_container').html('please show something');		// here you want to display it inside blog.php NOT WORKING
				} 	
				
			}// this ends the success function



		}); // this ends the ajax call
	} // this ends the load page function












}); // This closes document.ready