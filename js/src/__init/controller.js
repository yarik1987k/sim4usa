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
import popup from '../__shortcodes/popup';
import changeSim from '../__shortcodes/changeSim';
import brandCheck from '../__shortcodes/brandCheck';
import imeiCheck from '../__shortcodes/imeiCheck';
const headerMobile = new MobileHeader();

// GLOBAL APP CONTROLLER
const controller = {
	init() {
		document.querySelector('html').classList.remove('no-js');
		MegaMenu.init();
		headerMobile.init();
		Accordion.init();
		popup.init();
		Video.init();
		mirrorHover();
		smoothScroll();
		Tables.init();
		vhUnit();
		AlertBar(); 
		changeSim.init();
		brandCheck.init();
		imeiCheck.init();
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
