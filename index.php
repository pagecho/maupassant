<?php
/**
 * 简单的响应式模板
 * 
 * @package Maupassant
 * @author cho
 * @version 1.0
 * @link http://pagecho.com
 */
 
 $this->need('header.php');
 ?>

<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<article class="post">
				<h2 class="post-title">
					<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</h2>
				<ul class="post-meta">
					<li><?php $this->date('F j, Y'); ?></li>
					<li class="comment-count"><a rel="nofollow" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></a></li>
				</ul>
				<div class="post-content">
					<?php $this->content('阅读剩余部分 -'); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
