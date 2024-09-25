<?php

use Tempest\View\Renderers\BladeConfig;

return new BladeConfig(
    viewPaths: [
        __DIR__ . '/../../resources/views',
    ],
    cachePath: __DIR__ . '/../../storage/framework/views',
);
