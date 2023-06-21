var sendComment = document.getElementById('sendComment');
sendComment.addEventListener('submit', function(event){
	event.preventDefault();
	var comment = document.getElementById('comment').value 

	if (comment == "") {
		alert("Please enter a comment before submitting the form");
		return false;
	}
	else {

		var xhr;
		if (window.XMLHttpRequest) {
			xhr = new XMLHttpRequest(); 
		}
		else if (window.ActiveXObject) {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhr.open("GET","http://localhost:80/myass/db.php?comment="+comment,true);
        xhr.send();

        xhr.onreadystatechange=function(){
			if(xhr.readyState == 4 && xhr.status == 200){
	            if(xhr.responseText === "Comment sent successfully"){
	            sendComment.reset();
	            alert("Comment sent successfully");
				}
				if(xhr.responseText === "An error occured. Try again"){
	              alert("An error occured. Try again");
				}
			}
		};


	}

});
