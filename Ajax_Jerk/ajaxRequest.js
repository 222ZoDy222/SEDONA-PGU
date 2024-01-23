


console.log('HEHE BOY');



const path = "Ajax_Jerk/ROFL.php"

AjaxRequest("")

function DeleteHostels(){
	
	document.querySelectorAll(".hotel-card").forEach(el => el.remove());
}

function CreateHostel(obj) {   
	var ul = document.getElementById("hotel-list-id");   
	var li = document.createElement("li"); 
	li.className = "hotel-card";
	var a = document.createElement("a");
	a.className = "hotel-card-link";
	a.innerHTML = "<img class='hotel-card-image' src='images/catalog/catalog-1.jpg' width='300' height='212' alt='Отель Amara Resort & Spa.'>"
	li.appendChild(a);

	var a1 = document.createElement("a");
	a1.className = "hotel-card-link-title";
	a1.innerHTML = "<h3 class='hotel-card-title'>"+obj.name+"</h3>";
	li.appendChild(a1);

	
	let shitString = "<span class='hotel-card-desc-housing-type'>"+
	"Гостиница</span><span class='hotel-card-desc-price'>От "+
	obj.price +
	" ₽</span><a href='#' class='button-brown hotel-card-more'>"+
	"Подробнее</a><button type='button' class='button-blue "+
	"hotel-card-button-favourite'>В избранное</button>"+
	"<div class='hotel-card-four-stars'>"+
	"<span class='visually-hidden'>Четыре звезды.</span>"+
	"</div><p class='hotel-card-rating'>Рейтинг: "+obj.raiting+
	"</p>";
	li.innerHTML += shitString;

	ul.appendChild(li); 
}

function OnLoadAjax(xhr)
{
	if (xhr.status === 200) 
	{

	    
	    let json = xhr.responseText
	    const obj = JSON.parse(json);
	    
	    for (var i = 0; i < obj.length; i++) {
	    	console.log(obj)
	    	CreateHostel(obj[i]);
	    }
	    
	} else {
	    alert('Error:', xhr.statusText);
	}
}


let ajaxField = document.getElementById("nameHostel");
console.log(ajaxField);
ajaxField.addEventListener("change", updateValue);

function updateValue(e) {
	DeleteHostels();
  	console.log(e.target.value);
  	AjaxRequest(e.target.value)
}


function AjaxRequest(Value)
{
	
  	// Send an AJAX request to the server
  	const xhr = new XMLHttpRequest();
	
	var data = new FormData();
	data.append('NameValue', Value);
	
	xhr.open('POST', path, true);
	
	xhr.onload = function() {	    
		OnLoadAjax(xhr);
    };

    xhr.send(data);
}


