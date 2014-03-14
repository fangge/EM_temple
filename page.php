<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<article class="g-clr ny">
    <section class="List fltL List3 List3_2">
    <h2><i class="icon g-thide">List</i><?php echo $log_title; ?></h2>
    <div class="art">
        <?php echo $log_content; ?>
    </div><!--end #contentleft-->

<?php
 include View::getView('footer');
?>