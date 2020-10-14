<?php

// Dashboard
Breadcrumbs::for('admin.dashboard.index', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard.index'));
});

// Articles
Breadcrumbs::for('admin.articles.index', function ($trail) {
    $trail->push('Articles', route('admin.articles.index'));
});

// Articles > Create
Breadcrumbs::for('admin.articles.create', function ($trail) {
  $trail->parent('admin.articles.index');
    $trail->push('Create');
});

// Articles > Edit
Breadcrumbs::for('admin.articles.edit', function ($trail, $article) {
  $trail->parent('admin.articles.index');
    $trail->push($article->title);
});

// Categories
Breadcrumbs::for('admin.categories.index', function ($trail) {
  $trail->push('Categories', route('admin.categories.index'));
});

// Categories > Create
Breadcrumbs::for('admin.categories.create', function ($trail) {
$trail->parent('admin.categories.index');
  $trail->push('Create');
});

// Categories > Edit
Breadcrumbs::for('admin.categories.edit', function ($trail, $category) {
  $trail->parent('admin.categories.index');
    $trail->push($category->name);
});

// Tags
Breadcrumbs::for('admin.tags.index', function ($trail) {
  $trail->push('Tags', route('admin.tags.index'));
});

// Tags > Create
Breadcrumbs::for('admin.tags.create', function ($trail) {
$trail->parent('admin.tags.index');
  $trail->push('Create');
});

// Tags > Edit
Breadcrumbs::for('admin.tags.edit', function ($trail, $tag) {
$trail->parent('admin.tags.index');
  $trail->push($tag->name);
});

// Users
Breadcrumbs::for('admin.users.index', function ($trail) {
  $trail->push('Users', route('admin.users.index'));
});

// Users > Create
Breadcrumbs::for('admin.users.create', function ($trail) {
$trail->parent('admin.users.index');
  $trail->push('Create');
});

// Users > Edit
Breadcrumbs::for('admin.users.edit', function ($trail, $user) {
$trail->parent('admin.users.index');
  $trail->push($user->name);
});

// Roles
Breadcrumbs::for('admin.roles.index', function ($trail) {
  $trail->push('Roles', route('admin.roles.index'));
});

// Roles > Create
Breadcrumbs::for('admin.roles.create', function ($trail) {
$trail->parent('admin.roles.index');
  $trail->push('Create');
});

// Roles > Edit
Breadcrumbs::for('admin.roles.edit', function ($trail, $role) {
$trail->parent('admin.roles.index');
  $trail->push($role->name);
});

// Permissions
Breadcrumbs::for('admin.permissions.index', function ($trail) {
  $trail->push('Permissions', route('admin.permissions.index'));
});

// Permissions > Create
Breadcrumbs::for('admin.permissions.create', function ($trail) {
$trail->parent('admin.permissions.index');
  $trail->push('Create');
});

// Permissions > Edit
Breadcrumbs::for('admin.permissions.edit', function ($trail, $permission) {
$trail->parent('admin.permissions.index');
  $trail->push($permission->name);
});

// Logs
Breadcrumbs::for('admin.logs.index', function ($trail) {
  $trail->push('Logs', route('admin.logs.index'));
});

// Advertisements
Breadcrumbs::for('admin.advertisements.index', function ($trail) {
  $trail->push('Advertisements', route('admin.advertisements.index'));
});

// Advertisements > Create
Breadcrumbs::for('admin.advertisements.create', function ($trail) {
$trail->parent('admin.advertisements.index');
  $trail->push('Create');
});

// Advertisements > Edit
Breadcrumbs::for('admin.advertisements.edit', function ($trail, $advertisement) {
$trail->parent('admin.advertisements.index');
  $trail->push($advertisement->name);
});

// Profile > Edit
Breadcrumbs::for('admin.profile.edit', function ($trail, $user) {
  $trail->push('Profile');
});