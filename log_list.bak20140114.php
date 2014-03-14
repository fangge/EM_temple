<?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == BLOG_URL or 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == BLOG_URL.'index.php'): ?>
<article class="g-clr">
    <section class="imgSlide fltL">
        <div class="img-list g-clr">
            <ul class="slides g-clr">
                <?php kl_data_call_for_internal(4); ?>
            </ul>
        </div>
        <a id="prev" href="javascript:void(0)" class="g-thide">上一张</a>
        <a id="next" href="javascript:void(0)" class="g-thide">下一张</a>
    </section>
    <section class="List fltL List1">
        <h2><a href="<?php echo BLOG_URL; ?>?sort=40" target="_blank" class="fltR">+查看更多</a><i class="icon g-thide">List</i>学院新闻</h2>
        <ul class="g-clr">
            <?php kl_data_call_for_internal(1); ?>
        </ul>
    </section>
    <section class="List fltL List2 clrL">
        <h2><a href="<?php echo BLOG_URL; ?>?sort=42" target="_blank" class="fltR">查看更多+</a><i class="icon g-thide">List</i>教师公告</h2>
        <ul class="g-clr">
            <?php kl_data_call_for_internal(3); ?>
        </ul>
    </section>
    <section class="List fltL List2 List2_2">
        <h2><a href="<?php echo BLOG_URL; ?>?sort=41" target="_blank" class="fltR">查看更多+</a><i class="icon g-thide">List</i>学生公告</h2>
        <ul class="g-clr">
            <?php kl_data_call_for_internal(2); ?>
        </ul>
    </section>
    <section class="schBox">
        <?php
        $widgets = !empty($options_cache['widgets1']) ? unserialize($options_cache['widgets1']) : array();
        doAction('diff_side');
        foreach ($widgets as $val)
        {
            $widget_title = @unserialize($options_cache['widget_title']);
            $custom_widget = @unserialize($options_cache['custom_widget']);
            if(strpos($val, 'custom_wg_') === 0)
            {
                $callback = 'widget_custom_text';
                if(function_exists($callback))
                {
                    call_user_func($callback, htmlspecialchars($custom_widget[$val]['title']), $custom_widget[$val]['content']);
                }
            }else{
                $callback = 'widget_'.$val;
                if(function_exists($callback))
                {
                    preg_match("/^.*\s\((.*)\)/", $widget_title[$val], $matchs);
                    $wgTitle = isset($matchs[1]) ? $matchs[1] : $widget_title[$val];
                    call_user_func($callback, htmlspecialchars($wgTitle));
                }
            }
        }
        ?>
        <img src="<?php echo TEMPLATE_URL; ?>img/banner.jpg" alt=""/>
    </section>


<?php else: ?>
    <article class="g-clr ny">
        <section class="schBox">
            <?php
            $widgets = !empty($options_cache['widgets1']) ? unserialize($options_cache['widgets1']) : array();
            doAction('diff_side');
            foreach ($widgets as $val)
            {
                $widget_title = @unserialize($options_cache['widget_title']);
                $custom_widget = @unserialize($options_cache['custom_widget']);
                if(strpos($val, 'custom_wg_') === 0)
                {
                    $callback = 'widget_custom_text';
                    if(function_exists($callback))
                    {
                        call_user_func($callback, htmlspecialchars($custom_widget[$val]['title']), $custom_widget[$val]['content']);
                    }
                }else{
                    $callback = 'widget_'.$val;
                    if(function_exists($callback))
                    {
                        preg_match("/^.*\s\((.*)\)/", $widget_title[$val], $matchs);
                        $wgTitle = isset($matchs[1]) ? $matchs[1] : $widget_title[$val];
                        call_user_func($callback, htmlspecialchars($wgTitle));
                    }
                }
            }
            ?>
            <img src="<?php echo TEMPLATE_URL; ?>img/banner.jpg" alt=""/>
        </section>

        <section class="List fltL List3">
            <h2><i class="icon g-thide">List</i>您的位置：<a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a> >
                <?php
                if ($params[1]=='sort'){
                    if(isset($_GET['sort'])){
                        $sortname= $sort_cache[$_GET['sort']]['sortname'];
                    }else{
                        foreach($sort_cache as $val){
                            if($val['alias']!='' && $params[2]==$val['alias']) $sortname= $val['sortname'];
                        }
                    }
                    ?>
                    <?php echo $sortname;?>
                <?php }elseif ($params[1]=='tag'){ ?>
                    <span>包含标签</span>“<?php echo urldecode($params[2]);?>”<span>的文章</span>
                <?php }elseif($params[1]=='author'){ ?>
                    <span>作者</span>"<?php echo blog_author($author);?>"<span>的文章</span>
                <?php }elseif($params[1]=='keyword'){ ?>
                    <span>包含关键词</span>“<?php echo urldecode($params[2]);?>”<span>的搜索结果</span>
                <?php }elseif($params[1]=='record'){ ?>
                    <span>在</span>“<?php echo substr($params[2],0,4).'年'.substr($params[2],4,2).'月';?>”<span>发表的文章</span>
                <?php }else{?><?php }?>
            </h2>
            <ul class="g-clr">
                <?php
                if (!empty($logs)):
                    foreach($logs as $value):
                        ?>
                        <li><a href="<?php echo $value['log_url']; ?>" target="_blank"><?php echo $value['log_title']; ?></a>[<?php echo gmdate('Y-n-j', $value['date']); ?>]</li>
                    <?php
                    endforeach;
                else:
                    ?>
                    <h3>未找到</h3>
                    <p>对不起哦，这个分类下还没有文章，您可以浏览其他分类</p>
                <?php endif;?>
            </ul>
        </section>

<?php endif; ?>
<?php
// include View::getView('side');
 include View::getView('footer');
?>