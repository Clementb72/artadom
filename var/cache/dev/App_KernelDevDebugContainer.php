<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3nL95EE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3nL95EE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3nL95EE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3nL95EE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3nL95EE\App_KernelDevDebugContainer([
    'container.build_hash' => '3nL95EE',
    'container.build_id' => '0efd1ccb',
    'container.build_time' => 1641662283,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3nL95EE');
