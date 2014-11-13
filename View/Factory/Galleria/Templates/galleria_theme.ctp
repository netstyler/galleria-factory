<?php $themeUrl = $this->themeFolder . $this->theme . '/' . 'galleria.' . $this->theme . '.js'; ?>
<script type="text/javascript">
	$(document).ready(function () {
		Galleria.loadTheme('<?php echo $themeUrl; ?>');
	});
</script>
