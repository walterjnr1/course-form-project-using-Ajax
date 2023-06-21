var registerCourseForm = document.getElementById('registerCourseForm');
registerCourseForm.addEventListener('submit', function(event){
	event.preventDefault();
	var Java = document.getElementById('Java');
	var PHP = document.getElementById('PHP');
	var C = document.getElementById('C');
	var CPlus = document.getElementById('CPlus');
	var JavaScript = document.getElementById('JavaScript');
	var CSharp = document.getElementById('CSharp'); 
	var TypeScript = document.getElementById('TypeScript');
	var FSharp = document.getElementById('FSharp');
	var Python = document.getElementById('Python');
	var SQL = document.getElementById('SQL');

	
	if (Java.checked) {
		Java = document.getElementById('Java').value = "Java";
		document.getElementById("1").remove()
	}
	else {
		Java = document.getElementById('Java').value = "null";
	}



	if (PHP.checked) {
		PHP = document.getElementById('PHP').value = "PHP";
		document.getElementById("2").remove()
	}
	else {
		PHP = document.getElementById('PHP').value = "null";
	}



	if (C.checked) {
		C = document.getElementById('C').value = "C";
		document.getElementById("3").remove()
	}
	else {
		C = document.getElementById('C').value = "null";
	}



	if (CPlus.checked) {
		CPlus = document.getElementById('CPlus').value = "CPlus";
		document.getElementById("4").remove()
	}
	else {
		CPlus = document.getElementById('CPlus').value = "null";
	}




	if (JavaScript.checked) {
		JavaScript = document.getElementById('JavaScript').value = "JavaScript";
		document.getElementById("5").remove()
	}
	else {
		JavaScript = document.getElementById('JavaScript').value = "null";
	}



	if (CSharp.checked) {
		CSharp = document.getElementById('CSharp').value = "CSharp";
		document.getElementById("6").remove()
	}
	else {
		CSharp = document.getElementById('CSharp').value = "null";
	}



	if (TypeScript.checked) {
		TypeScript = document.getElementById('TypeScript').value = "TypeScript";
		document.getElementById("7").remove()
	}
	else {
		TypeScript = document.getElementById('TypeScript').value = "null";
	}



	if (FSharp.checked) {
		FSharp = document.getElementById('FSharp').value = "FSharp";
		document.getElementById("8").remove()
	}
	else {
		FSharp = document.getElementById('FSharp').value = "null";
	}



	if (Python.checked) {
		Python = document.getElementById('Python').value = "Python";
		document.getElementById("9").remove()
	}
	else {
		Python = document.getElementById('Python').value = "null";
	}



	if (SQL.checked) {
		SQL = document.getElementById('SQL').value = "SQL";
		document.getElementById("10").remove()
	}
	else {
		SQL = document.getElementById('SQL').value = "null";
	}

	var errRegMess = document.getElementById('errRegMess');

	var innerWrapper = document.getElementById('innerWrapper');

	var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

	if (checkboxes.length > 5) {
		errRegMess.innerHTML = 'You cannot select more than 5 courses'
		return false;
	}
	else {
		errRegMess.innerHTML = "";
		var xhr;
		if (window.XMLHttpRequest) {
			xhr = new XMLHttpRequest(); 
		}
		else if (window.ActiveXObject) {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhr.open("GET","http://localhost:80/myass/ajx.php?Java="+Java+"&PHP="+PHP+"&C="+C+"&CPlus="+CPlus+"&JavaScript="+JavaScript+"&CSharp="+CSharp+"&TypeScript="+TypeScript+"&FSharp="+FSharp+"&Python="+Python+"&SQL="+SQL,true);
        xhr.send();

        xhr.onreadystatechange=function(){
			if(xhr.readyState == 4 && xhr.status == 200){
	            innerWrapper.innerHTML = xhr.responseText
			}
		};
	}
});

