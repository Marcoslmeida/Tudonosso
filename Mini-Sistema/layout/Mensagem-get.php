<?php if (isset($_GET['msg']) && isset($_GET['tipo_msg'])){ ?>
		 	<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12 esconde">
		 		<?php echo $_GET['msg']; ?>
		 	</div>
		 <?php } ?>