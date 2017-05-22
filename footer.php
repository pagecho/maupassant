        </div>
    </div>
</div>
<footer id="footer">
    <div class="container">
        <div class="crumbs_patch">
            <a href="<?php $this->options->siteUrl(); ?>">首页</a> &raquo;</li>
            <?php if ($this->is('index')): ?><!-- 页面为首页时 -->
                最新博文
            <?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
                <?php $this->category(); ?> &raquo; <?php $this->title() ?>
            <?php else: ?><!-- 页面为其他页时 -->
                <?php $this->archiveTitle(' &raquo; ','',''); ?>
            <?php endif; ?>
        </div>
        &copy; <?php echo date('Y'); ?> <a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. 模板由<a href="http://pagecho.com">cho</a>制作.
    </div>
</footer>
<?php $this->footer(); ?>
</body>
</html>
