<?php
namespace LaravelFrontendPresets\KarmaEslintPreset;

use File;
use Illuminate\Foundation\Console\Presets\Preset;

class KarmaEslintPreset extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::copyStubs();
    }

    /**
     * Update the default welcome page file.
     *
     * @return void
     */
    protected static function copyStubs()
    {
        File::copyDirectory(__DIR__ . '/karma-eslint-stubs', base_path());
    }
}
