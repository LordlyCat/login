var yes = document.querySelector('.yes')
var no = document.querySelector('.no');

yes.addEventListener('click', function(){
	var xhr = new XMLHttpRequest();
	xhr.open("POST","index.php","false");
	xhr.send(null);
	request.onreadystatechange = function() {
		if (request.readyState===4) {
			if (request.status===200) { 
				alert('登录成功')；
			} else {
				alert("登录失败：" + request.status);
			}
		} 
	}
}, false);



