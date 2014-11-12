<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knowledge center</title>
<script type="text/javascript" src="../1autosuggestion_searchboxjquery-1.10.0.min.js"></script>
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
		<input type="text" class="search_box" id="search_box" placeholder="Search Your Topics" autocomplete="off">
		<input type="submit" name="serching2" value="Submit"><br /> 
		</form>

	</div>

</body>