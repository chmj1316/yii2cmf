<?php
/**
 * author: yidashi
 * Date: 2016/1/12
 * Time: 17:05.
 */
$this->title = $page->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .page-content img{max-width:95%;display:block;margin:0 auto;}
</style>
<div class="page-header text-center">
    <h1><?= $page->title?></h1>
</div>
<div class="page-content">
    <?= $page->content?>
</div>