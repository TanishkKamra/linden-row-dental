# Linden Row Dental: a custom WordPress block theme

A block theme for Linden Row Dental, a fictional private dental practice in Bristol. It is a design sample by [Tanishk Kamra](https://tanishk.is-a.dev): the brief was a calm, editorial site for nervous patients, with prices shown up front.

**[Open the live demo in WordPress Playground](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/TanishkKamra/linden-row-dental/main/playground/blueprint.json)**. It runs a real WordPress site in your browser, with nothing to install. You are logged in as admin, so you can open the Site Editor and change anything.

## What is in the theme

- **Design system in `theme.json`.** Nine named colours, a fluid type scale, a seven-step spacing scale and two self-hosted variable fonts. Default palettes and font sizes are switched off, so editors pick from the brand only.
- **Nine section patterns.** Hero, first visit, treatments, prices, nervous patients, team, questions, find us and a booking call to action, plus two page patterns, a header and a footer. Each one opens in the editor as ordinary blocks with no validation warnings.
- **Templates.** Front page, a no-title landing page template, singular, index and 404, with header and footer template parts.
- **Two inner pages.** A full price list and a booking page with a demo form. The form uses native validation and a 0.7 KB script. On a live site it would post to the client's form plugin or a small REST endpoint.
- **Accessibility.** Landmarks and a skip link, a logical heading order, visible focus styles, labelled form fields with large tap targets, and motion that respects `prefers-reduced-motion`. axe finds no serious or critical issues.
- **Performance.** Six WebP photos between 42 and 84 KB, both fonts preloaded, the hero image fetched first and the rest lazy-loaded, and no jQuery or emoji script.

## Run it locally

You need Node.js (tested with Node 24).

```bash
npx @wp-playground/cli@latest server --login \
  --mount-dir . /wordpress/wp-content/themes/linden-row-dental \
  --blueprint=playground/blueprint.local.json
```

Then open http://127.0.0.1:9400. The blueprint activates the theme and runs `playground/setup.php`, which turns on pretty permalinks and creates the Prices and Book pages.

## Use it on a normal WordPress site

1. Copy this folder to `wp-content/themes/linden-row-dental` (WordPress 6.6 or later).
2. Activate it under Appearance, Themes.
3. Create pages with the slugs `prices` and `book`, choose the "Landing page (no title)" template, and insert the "Page: full price list" and "Page: book a visit" patterns.

The booking form sits in a Custom HTML block. WordPress strips form fields from that block when a user without the `unfiltered_html` capability saves the page, which includes everyone except Super Admins on multisite. On those sites, have a Super Admin save the Book page, or swap the demo form for the client's form plugin.

## Structure

```
style.css          Theme header and the CSS that theme.json cannot express
theme.json         Colours, type, spacing, layout and block styles
functions.php      Assets, font preloads, pattern category, image loading hints
templates/         front-page, page-landing, singular, index, 404
parts/             header, footer
patterns/          Section and page patterns (PHP, so links follow the site URL)
assets/            Fonts, WebP images, the demo form script
playground/        Blueprints and the demo setup script
```

## Credits

Photos from Unsplash and fonts under the SIL Open Font License. See [CREDITS.md](CREDITS.md).

The practice, the people's names, the prices and the address are all made up.
