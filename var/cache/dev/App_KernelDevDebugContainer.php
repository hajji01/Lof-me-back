<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSW1w7qt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSW1w7qt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSW1w7qt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSW1w7qt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSW1w7qt\App_KernelDevDebugContainer([
    'container.build_hash' => 'SW1w7qt',
    'container.build_id' => 'a1a304a9',
    'container.build_time' => 1703068179,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSW1w7qt');
