<html>
<head>
<script type="text/javascript">
	function udacity(){
		$.getJSON('http://anyorigin.com/get?url=http%3A//webapp.armadealo.com/home.json&callback=?', function(data){
		$('#output').html(data.contents);
		});	
	}
</script>
</head>