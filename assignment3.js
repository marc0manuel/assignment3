window.onload = function() {
	prepareListener();
}

function prepareListener() {
	var droppy;
	droppy = document.getElementById("customerp");
	droppy.addEventListener("change", getCustomerInfo);
}

	function getCustomerInfo(){
	this.form.submit();
}

	function getProductSort(){
		
	}


