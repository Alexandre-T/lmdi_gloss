function glossary_check_all(source) {
	var checkboxes = document.getElementsByName('mark_glossary_forum[]');
	var n=checkboxes.length;
	for(var i=0; i<n; i++) {
		checkboxes[i].checked = source.checked;
	}
}
