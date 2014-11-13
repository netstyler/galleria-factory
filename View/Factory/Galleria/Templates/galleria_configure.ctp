<?php
if (!empty($this->options)) {
?>
	<script type="text/javascript">
		$(document).ready(function () {
			Galleria.configure({
				<?php
				foreach ($this->options as $key => $value) {
					if (!is_string($value)) {
						throw new MethodNotAllowedException('Value needs to be a string. Example for boolean: \'true\'');
					}
					echo $key . ': ' . $value . ',';
				}
				?>
			});
		});
	</script>
<?php
}
