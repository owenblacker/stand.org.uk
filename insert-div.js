document.addEventListener('DOMContentLoaded', function() {
	var divHTML = [];
	divHTML.push('<div id="dated-warning">');
	divHTML.push('<p>This website has been resurrected from backups and the Internet Archive by <a href="https://twitter.com/owenblacker">@owenblacker</a>.</p>');
	divHTML.push('<p>Some links are probably broken or point to unexpected places.</p>');
	divHTML.push('<p>No warranties and all that rubbish.</p>');
	divHTML.push('<p><a href="" onclick="document.getElementById(\'dated-warning\').style.display=\'none\'; return false;">Dismiss</a></p>');
	divHTML.push('</div>');
	divHTML.push('<style type="text/css">');
	divHTML.push('#dated-warning {');
	divHTML.push('  position: fixed;');
	divHTML.push('  top: 20px;');
	divHTML.push('  right: 20px;');
	divHTML.push('  border: dotted 2px red;');
	divHTML.push('  border-radius: 25px;');
	divHTML.push('  padding: 1em;');
	divHTML.push('  width: 10em;');
	divHTML.push('  background: white;');
	divHTML.push('  color: black;');
	divHTML.push('  font-size: 90%;');
	divHTML.push('}');
	divHTML.push('</style>')

	document.body.innerHTML += divHTML.join('\n');
}, false);