<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<h1 class="post-title">
				<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
			</h1>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
		</article>
		<?php $this->need('comments.php'); ?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
