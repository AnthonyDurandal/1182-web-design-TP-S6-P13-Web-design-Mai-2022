<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJwxM59j\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJwxM59j/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJwxM59j.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJwxM59j\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJwxM59j\App_KernelDevDebugContainer([
    'container.build_hash' => 'JwxM59j',
    'container.build_id' => '1a98d674',
    'container.build_time' => 1652776251,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJwxM59j');