<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBXtMEsH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBXtMEsH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBXtMEsH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBXtMEsH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBXtMEsH\App_KernelDevDebugContainer([
    'container.build_hash' => 'BXtMEsH',
    'container.build_id' => '8347b76f',
    'container.build_time' => 1646070931,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBXtMEsH');
