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

function isConnected()
{
    try {
        $transport = new Swift_SmtpTransport(config('mail.mailers.smtp.host'), config('mail.mailers.smtp.port'), config('mail.mailers.smtp.encryption'));
        $transport->setUsername(config('mail.mailers.smtp.username'));
        $transport->setPassword(config('mail.mailers.smtp.password'));
        $mailer = new \Swift_Mailer($transport);
        $mailer->getTransport()->start();
        return true;
    } catch (Swift_TransportException $e) {
        return $e->getMessage();
    } catch (\Exception $e) {
        return $e->getMessage();
    }
}
