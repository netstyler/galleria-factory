<style>#<?php echo $this->galleryName; ?>{ width: <?php echo $this->width; ?>px; height: <?php echo $this->height; ?>px; background: <?php echo $this->background; ?> }</style>
<div id="<?php echo $this->galleryName; ?>">
	<?php echo $this->renderChildren(); ?>
</div>
<?php $themeUrl = $this->theme['folder'] . $this->theme['name'] . DS . 'galleria.' . $this->theme['name'] . '.js'; ?>
<script>
	Galleria.loadTheme('<?php echo $themeUrl; ?>');
	Galleria.run('#<?php echo $this->galleryName; ?>');
</script>
