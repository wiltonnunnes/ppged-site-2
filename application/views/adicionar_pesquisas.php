<html>

<body>
	<form method="post" action="#">
		<input type="text" name="professor" id="professor" onkeyup="search()">
		<select id="professores" name="professores"></select>
	</form>
	<script>
		function search() {
			var str = document.getElementById("professor").value;
			if (str.length != 0) {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						var teachers, i, options;
						teachers = JSON.parse(this.responseText);
						options = "";
						for (var i = 0; i < teachers.length; i++) {
							options += '<option value="' + teachers[i]["professor_id"] + '">' + teachers[i]["nome"] + '</option>\n';
						}
						getElementById("professores").innerHTML = options;
					} 
				}
			}
		}
	</script>
</body>

</html>