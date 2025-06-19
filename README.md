# Silverstripe Vitesse Spritemap

Adds spritemap support to the [Silverstripe Vitesse](https://github.com/bigfork/silverstripe-vitesse) package via the [`@spiriit/vite-plugin-svg-spritemap`](https://github.com/SpiriitLabs/vite-plugin-svg-spritemap) Vite plugin.

## Usage

Install and configure the [`@spiriit/vite-plugin-svg-spritemap`](https://github.com/SpiriitLabs/vite-plugin-svg-spritemap) Vite plugin.

Template usage:

```html
<svg aria-hidden="true"><use xlink:href="{$viteSprite('icon-name')}"></use></svg>
```
