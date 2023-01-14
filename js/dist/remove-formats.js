/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/editor-formats/remove-formats/script.js ***!
  \*******************************************************************************/
const { wp } = window;
const { unregisterFormatType } = wp.richText;

wp.domReady(function () {
	unregisterFormatType('core/strikethrough');
	unregisterFormatType('core/image');
	unregisterFormatType('core/subscript');
	unregisterFormatType('core/superscript');
	unregisterFormatType('core/text-color');
});

/******/ })()
;
//# sourceMappingURL=remove-formats.js.map