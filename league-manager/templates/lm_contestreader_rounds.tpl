<div class=" <?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasContestid): ?>
		<div class="contest"><span class="contestname"><?php echo $this->contest; ?></span></div>

		<ul>
			<?php foreach($this->rounds as $round): ?>
				<li class="round <?php echo $round['class']; ?>">
					<span class="roundname"><?php echo $round['name']; ?></span>
					<span class="roundmode"><?php echo $round['mode']; ?></span>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>