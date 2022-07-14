<?php if (!empty($_SESSION['gagal'])) : ?>
	<script type="text/javascript">
		swal.fire(
			'Gagal!', <?php echo $_SERVER['gagal'] ?>, 'Error'
			)
	</script>
	<?php unset($_SESSION['gagal']) ?>
	<?php endif; ?>