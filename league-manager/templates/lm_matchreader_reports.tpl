<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasMatchid): ?>
		<div class="report">
			<div class="reporttitle"><h1><?php echo($this->reporttitle); ?></h1></div>
			<div class="reporttext">
				<?php echo($this->reporttext); ?>
			</div>
		</div>
	<?php endif; ?>
</div>
