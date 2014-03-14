<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

    <article class="g-clr ny">
        <section class="List fltL List3 List3_2">
            <h2><i class="icon g-thide">List</i>您的位置：<?php blog_sort($logid); ?> > <?php echo $log_title; ?></h2>
            <div class="art">
                <h3 class="artTitle"><?php topflg($top); ?><?php echo $log_title; ?></h3>
				<p class="artInfo">作者：<?php blog_author($author); ?> 发布于：<span class='artTime'><?php echo gmdate('Y-n-j', $date); ?></span>
                    分类：<?php blog_sort($logid); ?> <?php editflg($logid,$author); ?>
                </p>
                <div class="artText">
                    <?php echo $log_content; ?>
                </div>

                <p class="tag"><?php blog_tag($logid); ?></p>
                <?php doAction('log_related', $logData); ?>
                <div class="nextlog g-clr"><?php neighbor_log($neighborLog); ?></div>
                <?php blog_comments($comments); ?>
                <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
                <div class="g-clr"></div>
            </div>
        </section>

<?php
// include View::getView('side');
include View::getView('footer');
?>