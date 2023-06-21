var loginForm = document.getElementById('loginForm');
loginForm.addEventListener('submit', function(event){
	event.preventDefault();
	var uname = document.getElementById('uname').value 
	var pword = document.getElementById('pword').value 
	var errMsg = document.getElementById('errMsg');

	if (uname.length == "") {
		errMsg.innerHTML = "Username is required";
		return false;
	}
	else if (pword.length == "") {
		errMsg.innerHTML = "Password is required";
		return false;
	}

	else {
		errMsg.innerHTML = "";
		var xhr;
		if (window.XMLHttpRequest) {
			xhr = new XMLHttpRequest(); 
		}
		else if (window.ActiveXObject) {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhr.open("GET","http://localhost:80/myass/action.php?surname="+uname+"&studno="+pword,true);
        xhr.send();

        xhr.onreadystatechange=function(){
			if(xhr.readyState == 4 && xhr.status == 200){
	            if(xhr.responseText === "Login Successful. Redirecting in 2s..."){
	            errMsg.innerHTML = xhr.responseText;
	            loginForm.reset();
	            setTimeout(function(){
					window.location.href = "register";
				}, 2000);
				}
				if(xhr.responseText === "Invalid login credentials."){
	              errMsg.innerHTML = xhr.responseText;
				}
			}
		};
	}
});



