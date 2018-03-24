<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/metisMenu.min.js') }}"></script>
<script src="{{ asset('js/pace.min.js') }}"></script>
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/skin.config.min.js') }}"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script>
	function downloadCSV(csv, filename) {
		var csvFile;
		var downloadLink;

		// CSV file
		csvFile = new Blob([csv], {type: "text/csv"});

		// Download link
		downloadLink = document.createElement("a");

		// File name
		downloadLink.download = filename;

		// Create a link to the file
		downloadLink.href = window.URL.createObjectURL(csvFile);

		// Hide download link
		downloadLink.style.display = "none";

		// Add the link to DOM
		document.body.appendChild(downloadLink);

		// Click download link
		downloadLink.click();
	}
</script>
<script>
	function exportTableToCSV(filename) {
		var csv = [];
		var rows = document.querySelectorAll("table tr");
		
		for (var i = 0; i < rows.length; i++) {
			var row = [], cols = rows[i].querySelectorAll("td, th");
			
			for (var j = 0; j < cols.length-1; j++) 
				row.push(cols[j].innerText);
			
			csv.push(row.join(","));        
		}

		// Download CSV file
		downloadCSV(csv.join("\n"), filename);
	}
</script>