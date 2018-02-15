<?php
namespace LaravelFrontendPresets\KarmaEslintPreset;

use File;
use Illuminate\Foundation\Console\Presets\Preset;

class KarmaEslintPreset extends Preset
{
    protected static $stubsDir = __DIR__ . '/karma-eslint-stubs';
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::copyStubs();
    }

    public static function getConfirmation($command)
    {
        $command->info('Copying KarmaEslint scaffolding files');

        collect(File::allFiles(static::$stubsDir, true))
        ->map
        ->getRelativePathname() // see Symfony\Component\Finder\SplFileInfo
        ->each(function ($file) use ($command) {
            $commandMessage = 'file: ' . $file;
            $commandLevel = 'info';

            if(File::exists(base_path($file))) {
                $commandMessage .= " > Exists already, override it!";
                $commandLevel = 'warn';
            }

            $command->{$commandLevel}($commandMessage);
        });

        return $command->confirm('Proceed. Copy the files.', true);
    }
    /**
     * Update the default welcome page file.
     *
     * @return void
     */
    protected static function copyStubs()
    {
        File::copyDirectory(static::$stubsDir, base_path());
    }
}
