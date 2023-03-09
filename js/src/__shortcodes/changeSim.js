const $ = jQuery.noConflict();

class ChangeSimType {
	 
	init() {
		this.bindEvents();
	}
	bindEvents() {
		let changeSimButton = $('.change-sim');
		let closePopup = $('.close-sim-change');
		let btnOptions = $('.btn-option');
		$(changeSimButton).on('click', this.popupToggle)
		$(closePopup).on('click', this.closePopup)
		$(btnOptions).on('click', this.changeSim)
	}
	popupToggle() {
		event.preventDefault();
		$(this).next().toggleClass('active');
	}
	closePopup(){
		event.preventDefault();
		let parent = $(this).prev().prevObject[0].offsetParent;
		$(parent).toggleClass('active');
	}
	changeSim(){
		event.preventDefault();
		console.log(this)
		  let metaId = this.dataset.metaId;
		  let simType = this.dataset.type;
 
		$.ajax({
			type: 'POST',
			url: woocommerce_params.ajax_url,
			data: {
				action: 'change_sim',
				metaId: metaId,
				simType: simType
			},
			success(response) {
				location.reload();
			},
		}); 
	}
}

export default new ChangeSimType;
