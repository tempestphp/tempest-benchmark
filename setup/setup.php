<?php

$templates = [
    __DIR__ . '/UserController_001.php' => __DIR__ . '/../app/Controllers/',
    __DIR__ . '/AdminController_001.php' => __DIR__ . '/../app/Controllers/',
    __DIR__ . '/PostController_001.php' => __DIR__ . '/../app/Controllers/',
    __DIR__ . '/ConsoleCommand_001.php' => __DIR__ . '/../app/Console/',
];

foreach ($templates as $templatePath => $destination) {
    $template = file_get_contents($templatePath);

    if (! is_dir($destination)) {
        mkdir($destination);
    }

    foreach (range(1, 999) as $i) {
        $i = str_pad($i, 3, '0', STR_PAD_LEFT);
        $filename = pathinfo($templatePath, PATHINFO_BASENAME);
        $filename = str_replace('001', $i, $filename);

        file_put_contents(
            $destination . $filename,
            str_replace('001', $i, $template),
        );
    }
}


echo 'Done';