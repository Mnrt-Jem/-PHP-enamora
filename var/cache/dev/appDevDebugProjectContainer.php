<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIbaxzio\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIbaxzio/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIbaxzio.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIbaxzio\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerIbaxzio\appDevDebugProjectContainer([
    'container.build_hash' => 'Ibaxzio',
    'container.build_id' => '981d0123',
    'container.build_time' => 1615118235,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIbaxzio');
