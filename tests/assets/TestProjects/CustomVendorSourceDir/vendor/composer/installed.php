<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'foo/bar',
        'dev' => true,
    ),
    'versions' => array(
        'lib/dependency' => array(
            'install_path' => __DIR__ . '/../../custom/lib/dependency',
        ),
    ),
);