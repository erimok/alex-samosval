<?php

if (!file_exists(__DIR__ . '/vendor/autoload.php')) return;

require_once __DIR__ . '/vendor/autoload.php';

const DATABASE = __DIR__ . '/data.json';

require_once __DIR__ . '/helpers.php';

require_once __DIR__ . '/Views/index.php';