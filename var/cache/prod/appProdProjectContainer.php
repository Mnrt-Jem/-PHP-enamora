<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWqvzadu\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWqvzadu/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerWqvzadu.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerWqvzadu\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerWqvzadu\appProdProjectContainer([
    'container.build_hash' => 'Wqvzadu',
    'container.build_id' => 'b50fba81',
    'container.build_time' => 1615052854,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWqvzadu');
