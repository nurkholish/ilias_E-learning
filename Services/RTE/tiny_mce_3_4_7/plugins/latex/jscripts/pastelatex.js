tinyMCEPopup.requireLangPack();

function saveContent() {
	if (document.forms[0].htmlSource.value == '') {
		tinyMCEPopup.close();
		return false;
	}

	tinyMCEPopup.execCommand('mceLatexPaste', false, {
		html : document.forms[0].htmlSource.value
	});
	tinyMCEPopup.close();
}

function onLoadInit() {
	tinyMCEPopup.resizeToInnerSize();

	resizeInputs();
}

var wHeight=0, wWidth=0, owHeight=0, owWidth=0;

function resizeInputs() {
	if (!tinyMCE.isMSIE) {
		wHeight = self.innerHeight-80;
		wWidth = self.innerWidth-17;
	} else {
		wHeight = document.body.clientHeight-80;
		wWidth = document.body.clientWidth-17;
	}

	document.forms[0].htmlSource.style.height = Math.abs(wHeight) + 'px';
	document.forms[0].htmlSource.style.width  = Math.abs(wWidth) + 'px';
}

tinyMCEPopup.onInit.add(onLoadInit);