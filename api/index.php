<?php

// 1. Manually set storage path to /tmp (read-only filesystem workaround)
putenv('APP_STORAGE=/tmp');
putenv('VIEW_COMPILED_PATH=/tmp/views');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// 2. Ensure /tmp/views exists for compiled templates
if (!is_dir('/tmp/views')) {
    mkdir('/tmp/views', 0755, true);
}

// 3. Forward requests to the public/index.php
require __DIR__ . '/../public/index.php';
