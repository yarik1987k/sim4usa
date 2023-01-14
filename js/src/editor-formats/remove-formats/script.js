const { wp } = window;
const { unregisterFormatType } = wp.richText;

wp.domReady(function () {
	unregisterFormatType('core/strikethrough');
	unregisterFormatType('core/image');
	unregisterFormatType('core/subscript');
	unregisterFormatType('core/superscript');
	unregisterFormatType('core/text-color');
});
