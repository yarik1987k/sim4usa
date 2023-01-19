import MegaMenu from '../__header/MegaMenu';
import MobileHeader from '../__header/mobileHeader';
import Accordion from '../__shortcodes/accordions';
import mirrorHover from '../__utils/mirrorHover';
import Video from '../__utils/video';
import smoothScroll from '../__utils/smoothScroll';
import Tables from '../__utils/tables';
import Forms from '../__utils/forms';
import vhUnit from '../__utils/vhUnit';
import AlertBar from '../__header/AlertBar'; 
import miniCart from '../__woo/miniCart';
import qtyBtns from '../__woo/qtyBtns'; 
const headerMobile = new MobileHeader();

// GLOBAL APP CONTROLLER
const controller = {
	init() {
		document.querySelector('html').classList.remove('no-js');
		MegaMenu.init();
		headerMobile.init();
		Accordion.init();
		Video.init();
		mirrorHover();
		smoothScroll();
		Tables.init();
		vhUnit();
		AlertBar(); 
		//miniCart.init();
		//qtyBtns.init();
	},
	loaded() {
		document.querySelector('body').classList.add('page-has-loaded');
		Forms();
		vhUnit();
		
	},
	resized() {
		headerMobile.resized();
		Tables.toggleShadow();
		vhUnit();
	},
	scrolled() {},
	keyDown() {},
	mouseUp(e) {
		headerMobile.hideOutsideClick(e);
	},
};
export default controller;
