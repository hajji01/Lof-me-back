<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXC5whmi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXC5whmi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXC5whmi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXC5whmi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXC5whmi\App_KernelDevDebugContainer([
    'container.build_hash' => 'XC5whmi',
    'container.build_id' => 'af3b99a6',
    'container.build_time' => 1702981435,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXC5whmi');
