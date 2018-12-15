<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.priceformat.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>
<script type="text/javascript">
	$('.price').priceFormat({
    prefix: '',
    centsSeparator: ',',
    thousandsSeparator: '.'
});
	setTimeout(function() {
		$(".esconde").fadeOut(2500);
	}, 1000);
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
	});
</script>
</body>
</html>