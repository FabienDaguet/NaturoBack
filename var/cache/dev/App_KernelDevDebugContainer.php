<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRJ5u5iL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRJ5u5iL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRJ5u5iL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRJ5u5iL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRJ5u5iL\App_KernelDevDebugContainer([
    'container.build_hash' => 'RJ5u5iL',
    'container.build_id' => '3f531234',
    'container.build_time' => 1615297759,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRJ5u5iL');
