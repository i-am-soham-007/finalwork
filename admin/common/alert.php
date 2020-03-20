<?php if (isset($_SESSION['errorMsg'])) {?>
<script type="text/javascript">
		Lobibox.notify('error', {
	    pauseDelayOnHover: true,
	    continueDelayOnInactiveTab: false,
	    position: 'top right',
	    icon: 'fa fa-times-circle',
	    msg: '<?php echo $_SESSION['errorMsg'];
	    unset($_SESSION['errorMsg']); ?>'
	    });
	  	 
</script>
<?php  } else if (isset($_SESSION['successMsg'])) { ?>
<script type="text/javascript">
		Lobibox.notify('success', {
	    pauseDelayOnHover: true,
	    continueDelayOnInactiveTab: false,
	    position: 'top right',
	    icon: 'fa fa-check-circle',
	    msg: '<?php echo $_SESSION['successMsg'];
	    unset($_SESSION['successMsg']);?>'
	    });
</script>
<?php } ?>

