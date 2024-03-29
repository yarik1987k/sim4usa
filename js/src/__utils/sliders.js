const $ = jQuery.noConflict();

class Slider {
	constructor(selector, args = {}) {
		this.selector = selector;
		this.args = args;
	}

	getDefaultSlickSettings() {
		return {
			dots: false,
			arrows: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			pauseOnHover: false,
			speed: 600,
		};
	}

	/**
	 * Override our default slick settings with args provided to the class.
	 */
	getSlickSettings() {
		return Object.assign({}, this.getDefaultSlickSettings(), this.args);
	}

	init() {
		const settings = this.getSlickSettings();

		$(this.selector).slick(settings);
	}
}

const SimpleSlider = new Slider('.gallery-slider__slider');
const SimpleSliderCards = new Slider('.cards-slider-init', {
	centerMode: false,
	variableWidth: false,
	slidesToShow: 3,
	slidesToScroll: 3,
	dots:true,
	responsive: [
		{
			breakpoint: 1290,
			settings: {
				centerMode: false,
				variableWidth: false,
				slidesToShow: 1,
				slidesToScroll: 1,
			},
		},
	],
}); 
const SimpleSliderCardsNoDs = new Slider('.cards-slider-init--no-desktop', {
	centerMode: false,
	variableWidth: false,
	slidesToShow: 3,
	slidesToScroll: 3,
	dots:true,
    responsive: [
        {
            breakpoint: 9999,
            settings: "unslick"
        },
        {
            breakpoint: 767,
             settings: {
				centerMode: false,
				variableWidth: false,
				slidesToShow: 1,
				slidesToScroll: 1,
                }
        }
    ]
}); 
const TestimonialSlider = new Slider('.testimonial-slider'); 
const FluidSlider = new Slider('.gallery-slider__slider-fluid', { 
	centerMode: true,
	variableWidth: true,
	responsive: [
		{
			breakpoint: 1290,
			settings: {
				centerMode: false,
				variableWidth: false,
			},
		},
	],
});
export { SimpleSlider, TestimonialSlider, FluidSlider, SimpleSliderCards, SimpleSliderCardsNoDs };
