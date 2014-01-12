<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<h1 class="post-title"><?php $this->title() ?></h1>
			<ul class="post-meta">
				<li><?php $this->date('F j, Y'); ?></li>
				<li class="comment-count"><a rel="nofollow" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
		</article>
		<?php $this->need('comments.php'); ?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
