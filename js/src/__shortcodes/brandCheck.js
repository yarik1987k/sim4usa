const $ = jQuery.noConflict();
import Brands from "../../../brands.json";
class BrandCheck {
	init() {
	  // Call bindEvents() once to initialize the results list
	  this.bindEvents();
	}
	
	bindEvents() {

		$('.check-helper').on('click',this.popupToglle);
		$('.close-sim-benefit-popup').on('click',this.popupToglle);
		
	  // Get the search box input field and the results list
	  var searchBox = document.getElementById("search-box");
	  var resultsList = document.getElementById("results-list");
	  
	  // Bind the search function to the oninput event of the search box
	  if(searchBox){
		searchBox.addEventListener("input", function() {
			// Get the search term from the input field
			var searchTerm = searchBox.value;
	  
			// If the search string is empty, clear the results list and return
			if (searchTerm === "") {
			  resultsList.innerHTML = "";
			  return;
			}
	  
			// Search the array for matches
			var results = Brands.filter(function(item) {
			  return item.toLowerCase().indexOf(searchTerm.toLowerCase()) !== -1;
			});
	  
			// Display the results in the results list
			resultsList.innerHTML = "";
			if (results.length === 0) {
			  resultsList.innerHTML = "<li>No results found.</li>";
			} else {
			  results.forEach(function(item) {
				resultsList.innerHTML += "<li>" + item + "</li>";
			  });
			}
		  });
	  }
	  
	}

	popupToglle(){
		$(document).find('.sim-benefit-popup').toggleClass('active');

	}
  }
  
  export default new BrandCheck();