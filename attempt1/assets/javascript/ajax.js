$(document).ready(function() {

    $('.sign_in').click(function(){
         var userName = $('#loginInput').val();
         var password = $('#password').val();
         alert(userName + ' ' + password);
         // This is now set
    });

    $('.sign_up').click(function(){
        var fullName = $('#FullNameInput').val();
        var userName = $('#UsernameInput').val();
        var email = $('#email').val();
        var password = $('#spassword').val();

        alert(fullName + userName + email + password);
        // This is now set    
    });


   
//NOTE ALL THIS COULD BE CREATED WITH JAVASCRIPT BUT EVERYTHING IS COMMENTED OUT AND FULLY BUILT WITH PHP

// $('body').on('click','.candy', function(){

    
//    console.log($(this).parent().parent().parent().html());

//    var content_html = $(this).parent().parent().parent().html();

//     $.get('newpage.php', function(response){
//         $('.hello').html(response);
//     }


// });      


/*        Withouth Javascript ajax calls. Loading data on new page          */

    /*
    function loadpage() {
        $.ajax({
            url: 'retrieve_blog.php',
            dataType: 'json',
            method: 'POST',
            cache: false,
            success: function(response) {
                console.log('before the success function');
                if (response.success === true) {
                    console.log('i got to this point');
                    //document.location.href='../blog.php';
                    $('.display_container').html(response.html);
                    $('.nav_lists').html(response.article);
                    //$('.display_container').html(response.html);      // here you want to display it inside blog.php NOT WORKING
                } else {
                    console.log("I didn't get this to place");
                }
            } // this ends the success function
        }); // this ends the ajax call
    } // this ends the load page function
*/


    
   



/*
    $('body').on('click', '.candy', function() {
 
        var num_articles = $('article');
        var count_articles = num_articles.length;
        for(var i = 0;i<num_articles.length;i++){
        var main_article = num_articles[i].innerHTML;w
        $('.hello').innerHTML(main_articles);

    }
    });


*/

/*
        var newPage_data = {
            title: toadd.find("input[name ='title']").val(),
            highlight: toadd.find("input[name='highlight']").val(),
            date: toadd.find("input[name='date']").val(),
            post_blog: toadd.find("textarea[name = 'blog']").val(),
        };

        $.ajax({
            url:'blog_form/newpage.php',
            data: newPage,
            dataType: json,
            method: POST,
            success: null,
        });
*/

    




    /*
    $('#post_blog').click(function(){
     var toadd = $('#adding');          //grabbing the adding id

     var form_data = {              //enter data in here
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
                
                // now I want to transition this to someother page
            } else {
                console.log('We are dealing with some problems right now');
            }
          

          //Dont paste anything inside the html document

        } //this closes the function success
     });  //This closes the ajax
    }); //This closes the click function
*/
    /*
    var $html = "<form action='../picture_upload/upload_validation.php'method='post' enctype='multipart/form-data'>Select image to upload:<input type='file' name='fileToUpload' id='fileToUpload'><input type='submit' value='Upload File' name='submit'></form>";



               $('.display_container').on( 'click','.click_image',function(){



                var upload_image = $("<div/>").addClass('alert alert-warning alert-dismissible').html($html);// We will put the content in here);        
                
                upload_image.insertAfter($(this));                                             // use jQuery insert after to insert the error_span after this
                
                var close_button = $("<button/>",{type:'button',class:'close',"data-dismiss":'alert','aria-label':'Close'});
                
                var span = $('<span>',{'aria-hidden':'true'}).html('&times;');
                
                close_button.append(span);
                
                upload_image.append(close_button);



            });  // this closes the event delegation

*/
}); // This closes document.ready