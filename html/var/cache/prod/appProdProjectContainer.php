<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYzjcify\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYzjcify/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerYzjcify.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerYzjcify\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerYzjcify\appProdProjectContainer([
    'container.build_hash' => 'Yzjcify',
    'container.build_id' => 'ad7ea5ef',
    'container.build_time' => 1641739147,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYzjcify');
