$(document).ready(function() {

	//alert("fdg");
    // process the form
    $('#contact_submit').submit(function(event) {
		
		
	
	/* 

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name'       : $('input[name=name]').val(),
            'email'      : $('input[name=email]').val(),
            'message'    : $('input[name=message]').val()
        }; */
	 	// show that something is loading
		$('#response').html("<b>Loading response...</b>");
		var formData = $('#contact_submit').serialize();
		var jqxhr = $.ajax({
			type:'POST',
			url:"a.php",
			data: formData,
			encode:true})
				.done(function(responsedata) {
					// log data to the console so we can see
					alert('success');
					//alert(responsedata);
					
					// show the response
					$('#response').html(responsedata);
        		})
				.fail(function() {
					alert( "error" );
				})
				.always(function() {
					alert( "complete" );
				}); 
				event.preventDefault();		
			// stop the form from submitting the normal way and refreshing the page
			
		});

});
