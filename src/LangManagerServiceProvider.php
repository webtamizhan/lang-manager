<?php

namespace Webtamizhan\LangManager;

use Illuminate\Filesystem\Filesystem;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webtamizhan\LangManager\Commands\FindCommand;
use Webtamizhan\LangManager\Commands\MissingCommand;
use Webtamizhan\LangManager\Commands\RemoveCommand;
use Webtamizhan\LangManager\Commands\RenameCommand;
use Webtamizhan\LangManager\Commands\ShowCommand;
use Webtamizhan\LangManager\Commands\SyncCommand;
use Webtamizhan\LangManager\Commands\TransCommand;

class LangManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $this->app->bind(Manager::class, function () {
            return new Manager(
                new Filesystem(),
                $this->app['config']['langmanager.path'],
                array_merge($this->app['config']['view.paths'], [$this->app['path']])
            );
        });

        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lang-manager')
            ->hasConfigFile('langmanager')
            ->hasCommands([
                MissingCommand::class,
                RemoveCommand::class,
                TransCommand::class,
                ShowCommand::class,
                FindCommand::class,
                SyncCommand::class,
                RenameCommand::class,
            ]);
    }
}
