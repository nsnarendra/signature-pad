<!DOCTYPE html>
<html>
	<head>
		<title>Testing</title>
	</head>	
	<body>
		<div class="wrapper">
	        <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
	    </div>
	    <div>
	        <button id="save">Save</button>
	        <button id="clear">Clear</button>
	    </div>
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
	<script>
		var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
		  backgroundColor: 'rgba(255, 255, 255, 0)',
		  penColor: 'rgb(0, 0, 0)'
		});
		var saveButton = document.getElementById('save');
		var cancelButton = document.getElementById('clear');

		saveButton.addEventListener('click', function (event) {
		  var data = signaturePad.toDataURL('image/png');

		// Send data to server instead...
		  window.open(data);
		});

		cancelButton.addEventListener('click', function (event) {
		  signaturePad.clear();
		});
	</script>

</html>
