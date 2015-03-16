<html>
<head><link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script>
      $(function() {
      $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
      $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' }).val();
      });
      </script>

</head>
<body>
  <p>Pick a Date: <input type="text" id="datepicker" /></p>
  </body>
</html>