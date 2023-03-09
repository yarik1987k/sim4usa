const $ = jQuery.noConflict();

class ImeiCheck {
	init() {
	  // Call bindEvents() once to initialize the results list
	  this.bindEvents();
	}
	
	bindEvents() {

 
 
	  var submitImei = document.getElementById("submit-imei");
	  var searchBox = document.getElementById("search-box-imei");
	  var results = document.getElementById("result-imei");
	  submitImei.addEventListener("click", function(e) {
		  e.preventDefault();
		// Get the search term from the input field
		var searchTerm = searchBox.value;


		 
		$.ajax({
			type: 'POST',
			url: woocommerce_params.ajax_url,
			dataType: 'JSON',
			data: {
				action: 'check_imei',
				searchTerm: searchTerm
			},
			success(response) {
				let json = JSON.parse(response);
				if(json.status === "succes"){
					results.innerHTML += 'Status: '+json.status+'<br>';
					results.innerHTML += json.result;

				}
				//location.reload();
			},
		});  
	  });
	}

 
  }
  
  export default new ImeiCheck();