


console.log('HEHE BOY');



const path = "Ajax_Jerk/ROFL.php"

function AjaxClick() {

	// Send an AJAX request to the server
  	const xhr = new XMLHttpRequest();
	
	xhr.open('POST', path);
	
	xhr.onload = function() {	    
		OnLoadAjax(xhr);
    };

    xhr.send();
    
}

function OnLoadAjax(xhr)
{
	if (xhr.status === 200) 
	{
	    alert(xhr.responseText);
	} else {
	    alert('Error:', xhr.statusText);
	}
}


let ajaxButton = document.getElementById("AjaxButton");


ajaxButton.addEventListener('click', AjaxClick);




