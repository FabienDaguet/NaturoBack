<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0OGcQKU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0OGcQKU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0OGcQKU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0OGcQKU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0OGcQKU\App_KernelDevDebugContainer([
    'container.build_hash' => '0OGcQKU',
    'container.build_id' => '3ccb0fd6',
    'container.build_time' => 1617714659,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0OGcQKU');
