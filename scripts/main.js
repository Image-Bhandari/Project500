var box  = document.getElementById('box');
var down = false;


function toggleNotifi(){
	if (down) {
		box.style.height  = '0px';
		box.style.disabled = false;
		down = false;
	}else {
		box.style.height  = '510px';
		box.style.disabled = true;
		down = true;
	}
}