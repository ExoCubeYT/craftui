<div align="center">
    <img src="https://raw.githubusercontent.com/exocubeyt/craftui/main/docs/svgs/crafting_table.svg" height="80" alt="Crafting Table">
    <h1>CraftUI</h1>
    <p><b>Minecraft-styled components for Laravel Livewire.</b></p>
    <p>Think <i>shadcn/ui</i>, but everything looks like it was ripped straight out of the game.</p>
    <p>
        <a href="https://exocubeyt.github.io/craftui/docs/">View Documentation</a>
    </p>
</div>

---

## 🛠️ Installation

Requirements:
- PHP 8.1+
- Laravel 10.0+
- Livewire 3.0+
- Tailwind CSS

Install via composer:

```bash
composer require exocubeyt/craftui
```

Then, publish the assets (SVGs, Fonts, etc.) and configuration:

```bash
php artisan vendor:publish --tag="craftui-assets"
php artisan vendor:publish --tag="craftui-config"
```

*Note: Make sure your `tailwind.config.js` is compiling the package views so the styles render correctly!*

## 📦 Available Components

All components drop in natively as standard Blade components using the `<x-craftui-...>` prefix.

- **`<x-craftui-button>`** - Primary, Secondary, and Danger physical buttons.
- **`<x-craftui-input>`** - Pixelated form inputs.
- **`<x-craftui-card>`** - Player Inventory style inset container (`#C6C6C6` UI).
- **`<x-craftui-alert>`** - Chat message / Advancement popup notifications.
- **`<x-craftui-progress>`** - Authentic green XP Bar with level indicators.
- **`<x-craftui-dropdown>`** - Standard select box.
- **`<x-craftui-icon>`** - Easy SVG wrapper for Minecraft tools (`sword`, `pickaxe`, `diamond`, `creeper`).

### Example

```html
<x-craftui-card title="Player Inventory">
    <x-craftui-input label="Server IP" placeholder="mc.hypixel.net" />
    <x-craftui-progress value="70" level="24" />
    <x-craftui-button variant="primary">Login</x-craftui-button>
</x-craftui-card>
```

## 📖 The Repository Structure

This repository is uniquely structured to house both the **Laravel Package** and the **Static Documentation Website** in one place!

*   `src/`, `config/`, `resources/`: Contains the underlying PHP/Blade source code for the Laravel package.
*   `docs/`: Contains the static HTML/CSS/JS documentation website. This folder is mapped natively to GitHub Pages to host the preview site entirely for free!

## 📜 License

This UI library is proudly 100% Free and Open Source software licensed under the MIT License. Brought to you by the Exo community.
