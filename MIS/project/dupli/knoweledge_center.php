<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search_box").keyup(function(){
			var search_string = $("#search_box").val();
			if(search_string == ''){
				$("#searchres").html('');
			}
			else
				{
					postdata = {'string' : search_string}
					$.post("check.php",postdata,function(data){
						$("#searchres").html(data);
					});
				}
		});
	});
	function fillme(name){
		$("#search_box").val(name);$("#searchres").html('');
	}
</script>
</head>
<body>
	<div class="content">
		<h1>Knowledge Center</h1>
		<form action="search_result.php" method="post">
			<div class="header">
				<input type="text" class="search_box" id="search_box" placeholder="Search Your Friends" autocomplete="off" name="searching">
				<input type="submit" name="serching2" value="Submit"><br />
			</div>
			<div id="searchres" class="searchres"></div>
		</form>
	</div>
</body>
</html>