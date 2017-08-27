// JavaScript Document
function deleterecord( id, name ) {
	
	if( id != "" ) {
		
		if( confirm( "Are you sure want to delete " + name + " record" ) ) {
			window.location = "Delete.php?id="+id;
		}
		
	} else {
		alert("Invalid Request");
	}
	
}


function updaterecord( id ) {
	
	if( id != "" ) {
		window.location = "Updateform.php?id="+id;
	} else {
		alert("Invalid Request");
	}
	
}