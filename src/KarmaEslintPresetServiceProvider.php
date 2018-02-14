<?php
namespace LaravelFrontendPresets\KarmaEslintPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class KarmaEslintPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('karma-eslint', function ($command) {
            KarmaEslintPreset::install();
            $command->info('KarmaEslint scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
