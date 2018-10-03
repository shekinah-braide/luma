function startRegisterCode() {
	var name = document.getElementById('name'),
		contact = document.getElementById('contact'),
		username = document.getElementById('username'),
		password = document.getElementById('password'),
		reg_code = document.getElementById('reg_code');
	var xmlHttp;
	if (name.value == "" || contact.value == "" || username.value == "" || password.value == "" || reg_code.value == "") {
		swal({
			type: 'error',
			title: 'Empty Fields',
			text: 'Please fill all input fields',
			footer: '<a href>Check your input fields</a>'
		})
	}else{
		if (window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	} else {
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlHttp.onreadystatechange = function () {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			var result = xmlHttp.responseText;
			if (result != 'good') {
				swal({
					type: 'error',
					title: 'Unsuccessful Registration!',
					text: 'Incorrect registration pin!',
					footer: '<a href>Why do I have this issue?</a>'
				})
			} else {
				swal({
					type: 'success',
					title: 'Successfull Registration!',
					text: 'Thanks for registering!',
					url: 'index.php'
				})
			}
		}
	  }
	}
	
	xmlHttp.open('GET', './phpScript/register.php?name=' + name.value + '&contact=' + contact.value + '&username=' + username.value + '&password=' + password.value + '&reg_code=' + reg_code.value, true);
	xmlHttp.send();
}
var btnSubmit = document.getElementById('btnReg');
var clickme = function () {
	startRegisterCode();
	// Ajax();
}
