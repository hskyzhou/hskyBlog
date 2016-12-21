<?php 

Breadcrumbs::register('article.index', function($breadcrumbs) {
    $breadcrumbs->push('首页', url('/'));
    $breadcrumbs->push('文章列表');
});

Breadcrumbs::register('article.create', function($breadcrumbs) {
    $breadcrumbs->push('首页', url('/'));
    $breadcrumbs->push('文章列表', route('article.index'));
    $breadcrumbs->push('添加文章');
});

Breadcrumbs::register('article.edit', function($breadcrumbs) {
    $breadcrumbs->push('首页', url('/'));
    $breadcrumbs->push('文章列表', route('article.index'));
    $breadcrumbs->push('修改文章');
});