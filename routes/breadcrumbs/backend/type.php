<?php

Breadcrumbs::for('admin.type.index', function ($trail) {
    $trail->push(__('labels.backend.access.types.management'), route('admin.type.index'));
});

Breadcrumbs::for('admin.type.create', function ($trail) {
    $trail->parent('admin.type.index');
    $trail->push(__('labels.backend.access.types.create'), route('admin.type.create'));
});

Breadcrumbs::for('admin.type.view', function ($trail, $id) {
    $trail->parent('admin.type.index');
    $trail->push(__('labels.backend.access.types.view'), route('admin.type.view', $id));
});

Breadcrumbs::for('admin.type.edit', function ($trail, $id) {
    $trail->parent('admin.type.index');
    $trail->push(__('labels.backend.access.types.update'), route('admin.type.edit', $id));
});
