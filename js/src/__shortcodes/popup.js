const $ = jQuery.noConflict();

class Popup {
	constructor(trigger) {
		this.trigger = $(trigger);
	}
	init() {
		this.bindEvents();
	}
	bindEvents() {
		this.trigger.on('click', this.toggleAccordion);
	}
	toggleAccordion() {
		$(document).find('.popup-extra').toggleClass('active');
		$(document).find('body').toggleClass('lock-scroll');

	}
}

export default new Popup('.popup-toggle');
