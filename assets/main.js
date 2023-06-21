var regStudentForm = document.getElementById('regStudentForm');
regStudentForm.addEventListener('submit', function(event){
	event.preventDefault();
	var lname = document.getElementById('lname').value 
	var fname = document.getElementById('fname').value 
	var studno = document.getElementById('studno').value 
	var dept = document.getElementById('dept').value 
	var cgpa = document.getElementById('cgpa').value 
	var semester = document.getElementById('semester').value 

	var errorMsg = document.getElementById('error-msg')
	var succMsg = document.getElementById('succMsg')

	if (lname == "" || fname == "" || studno == "" || dept == "" || cgpa == "" || semester == "") {
		errorMsg.innerHTML = "All fields are required";
		return false;
	}
	else {
		

		errorMsg.innerHTML = "";
		var xhr;
		if (window.XMLHttpRequest) {
			xhr = new XMLHttpRequest(); 
		}
		else if (window.ActiveXObject) {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhr.open("GET","http://localhost:80/myass/db.php?lname="+lname+"&fname="+fname+"&studno="+studno+"&dept="+dept+"&cgpa="+cgpa+"&semester="+semester,true);
        xhr.send();

        xhr.onreadystatechange=function(){
			if(xhr.readyState == 4 && xhr.status == 200){
	            if(xhr.responseText === "Details uploaded successfully"){
	            regStudentForm.reset();
	            succMsg.innerHTML = xhr.responseText;
	            setTimeout(function(){
					succMsg.innerHTML = "";
				}, 2000);
				}
				if(xhr.responseText === "An error occured. Try again"){
	              succMsg.innerHTML = xhr.responseText;
				}
			}
		};


	}

});
