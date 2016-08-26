<script>
function showHint(str) {
	if (str.length == 0) {
		document.getElementById("txtHint").innerHTML = "";
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElemenById("txtHint").innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET", "phpajax.php?q=" + str, true);
	}

	}
}
</script>
<?php
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

//get the q parameter from url
$q = $_REQUEST["q"];

$hint = "";

//lookup all hinta from array if $q is different from""
if ($q !=="") {
	$q =strtolower($q);
	$len=strlen($q);

	foreach($a as $name) {
		if(stristr($q, substr($name, 0, $len))) {
			if($hint ==="") {
				$hint = $name;
			} else {
				$hint .=", $name";
			}
		}
	}

}
echo $hint ==="" ? "no suggestion" : "$hint";
?>
<p><b>Start typing a name in the input field below:</b></p>
<form>
First name:<input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>