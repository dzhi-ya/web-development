<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIafxDCP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIafxDCP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIafxDCP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIafxDCP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIafxDCP\App_KernelDevDebugContainer([
    'container.build_hash' => 'IafxDCP',
    'container.build_id' => '94c5e3cf',
    'container.build_time' => 1622140186,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIafxDCP');
