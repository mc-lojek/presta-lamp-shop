<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUfmt0ag\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUfmt0ag/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerUfmt0ag.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerUfmt0ag\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerUfmt0ag\appDevDebugProjectContainer([
    'container.build_hash' => 'Ufmt0ag',
    'container.build_id' => '4bdef9eb',
    'container.build_time' => 1636800456,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUfmt0ag');
