<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXSz2oXp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXSz2oXp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXSz2oXp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXSz2oXp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXSz2oXp\App_KernelDevDebugContainer([
    'container.build_hash' => 'XSz2oXp',
    'container.build_id' => '302c8e03',
    'container.build_time' => 1684173134,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXSz2oXp');
