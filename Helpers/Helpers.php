<?php

use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;

function RegisterRepositories($namespace = 'App\Repositories')
{
    $finder = new Finder();

    $files = $finder->files()->name(['*Interface.php', '*Repository.php'])->in(app_path('Repositories'));

    foreach ($files as $index => $file) {

        $ns = $namespace;

        if ($relativePath = $file->getRelativePath()) {

            $ns .= '\\' . strtr($relativePath, '/', '\\');
        }

        if (Str::contains($file->getFilename(), "Repository.php")) {

            $classes[$file->getRelativePath()]['concrete'] = $ns . '\\' . $file->getBasename('.php');
        }
        if (Str::contains($file->getFilename(), "Interface.php")) {

            $classes[$file->getRelativePath()]['abstract'] = $ns . '\\' . $file->getBasename('.php');
        }
    }

    return $classes;
}
