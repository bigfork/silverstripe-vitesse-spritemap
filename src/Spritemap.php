<?php

namespace Bigfork\VitesseSpritemap;

use Bigfork\Vitesse\Vite;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\View\TemplateGlobalProvider;

class Spritemap implements TemplateGlobalProvider
{
    use Configurable;

    private static string $prefix = 'sprite-';

    private static string $output_name = 'spritemap.svg';

    public static function getViteSprite(string $name): string
    {
        $id = static::config()->get('prefix') . $name;
        $vite = Vite::inst();
        if ($vite->isRunningHot()) {
            return "#{$id}";
        }
        return $vite->asset(static::config()->get('output_name')) . "#{$id}";
    }

    public static function get_template_global_variables(): array
    {
        return [
            'viteSprite' => 'getViteSprite',
        ];
    }
}
