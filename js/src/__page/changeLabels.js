const $ = jQuery.noConflict();

class ChangeLabels {

	constructor() {
	  this.init();
	}
  
	init() {
	  this.bindEvents();
	}
  
	insertAfter(newNode, existingNode) {
	  existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
	}
  
	handleLabelChange = (event) => {
		let element = event.currentTarget;
		let innerLabel = element.getElementsByClassName('wapf-label-text');
		let innerText = innerLabel[0].innerHTML;
		if ('Physical SIM Card' === innerText) {
		  let newLabel = document.createElement('div');
		  newLabel.textContent = ' 3 size sim card regular micro nano.';
		  let existingLabel = element.parentElement.nextSibling;
		  if (existingLabel && existingLabel.classList && existingLabel.classList.contains('shipping-label')) {
			existingLabel.parentNode.removeChild(existingLabel);
		  }
		  newLabel.classList.add('shipping-label');
		  this.insertAfter(newLabel, element.parentElement);
		}
		if ('eSIM (Digital Delivery)' === innerText) {
		  let newLabel = document.createElement('div');
		  newLabel.textContent = 'No Shipping cost.';
		  let existingLabel = element.parentElement.nextSibling;
		  if (existingLabel && existingLabel.classList && existingLabel.classList.contains('shipping-label')) {
			existingLabel.parentNode.removeChild(existingLabel);
		  }
		  newLabel.classList.add('shipping-label');
		  this.insertAfter(newLabel, element.parentElement);
		}
		element.removeEventListener('change', this.handleLabelChange);
		element.addEventListener('change', this.handleLabelChange);
	  }
  
	bindEvents() {
	  let label = document.querySelectorAll('.wapf-checkable');
	  label.forEach(element => {
		element.addEventListener('change', this.handleLabelChange);
	  });
	}
}

export default new ChangeLabels();