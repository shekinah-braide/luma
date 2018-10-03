function startEbookUpload() {
	var mFile = document.getElementById('file');
	var mfiles = mFile.files;

	var formData = new FormData();
	for(var i=0; i<mfiles.length; i++){
		var file = mfiles[i];

		// if(!file.type.match('pdf.*')){
		// 	continue;
		// }
		formData.append('mFilesq', 'file', file.name);
		
	}
	alert(formData);
	// var xmlhttp;
	// if(window.XMLHttpRequest){
	// 	xmlhttp = new XMLHttpRequest();
	// }else{
	// 	xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	// }
	// xmlhttp.onload=function(){
	// 	if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
	// 		var response = xmlhttp.responseText;
	// 		alert(response);
	// 	}
	// }
	// xmlhttp.open('POST', './phpScript/ebook.php', true);
	// xmlhttp.send(formData);
	
}

// // FIRST METHOD (TRYING SOMETHING NEW)

// document.getElementById('postForm').addEventListener('submit', postData);

// function postData(e) {
// 	// Prevent form from submitting manually
// 	e.preventDefault();
// 	// Name Variables
// 	var ebook_id = document.getElementById('ebook_id').value;
// 	var ebook_name = document.getElementById('ebook_name').value;
// 	var ebook_file = document.getElementById('ebook_file').value;
// 	var params = "ebook_id" + ebook_id + "ebook_name" + ebook_name + "ebook_file" + ebook_file;

// 	// Start Ajax script
// 	var xhr = new XMLHttpRequest();
// 	xhr.open('POST', 'phpScript/process.php', true);
// 	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
// 	// Writing the output to the console
// 	xhr.onload = function () {
// 		console.log(this.responseText);
// 	}

// 	xhr.send(params);
// }

// SECOND METHOD (ORIGINAL METHOD)

