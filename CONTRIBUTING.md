# Contributing to CraftUI

Want to add a new Minecraft-themed component to the library? Follow this definitive guide to ensure the architecture remains flawless!

## 1. Create the Laravel Component (Backend)
All components are built as native Laravel Blade components. 

**A. Create the Controller:**
Create a new file in `src/Components/YourComponent.php`:
```php
<?php
namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class YourComponent extends Component
{
    public function render()
    {
        return view('craftui::components.your-component');
    }
}
```

**B. Create the View:**
Create the Blade view in `resources/views/components/your-component.blade.php`:
```html
<div {{ $attributes->merge(['class' => 'font-minecraft bg-[#C6C6C6] border-[3px] border-[#1E1E1F]']) }}>
    {{ $slot }}
</div>
```

## 2. Register the Component
Open `src/CraftUIServiceProvider.php` and map your new component inside the `boot()` method:
```php
Blade::component('craftui-your-component', \Exocubeyt\CraftUI\Components\YourComponent::class);
```
*Now developers can use `<x-craftui-your-component>` natively in their Laravel apps!*

## 3. Update the Documentation (Frontend)
Your component exists in the package, but people need to see it on the website!

**A. Add the HTML to the Showcase:**
Open `docs/components.html` and append a new block to the Grid. Follow the existing template structure:
```html
<div class="glass-card p-6 rounded-xl space-y-6" id="your-component-showcase">
    <h2 class="font-minecraft-bold text-xl text-white">Your Component</h2>
    
    <!-- Demonstration -->
    <button id="your-component-trigger">Test Me</button>
    <div id="your-component-target" class="hidden">Visible!</div>
    
    <!-- Code Snippet Box -->
    <div class="bg-black/50 p-4 rounded-md font-mono" id="your-component-snippet">
        &lt;x-craftui-your-component&gt;Test Me&lt;/x-craftui-your-component&gt;
    </div>
</div>
```

**B. Add Vanilla JS Logic (No AlpineJS Allowed!):**
Open `docs/js/uiexo.js` and add your isolated logic block:
```js
// X. Your Component Logic
const customShowcase = document.getElementById('your-component-showcase');
if (customShowcase) {
    const trigger = document.getElementById('your-component-trigger');
    const target = document.getElementById('your-component-target');
    
    trigger.addEventListener('click', () => {
        target.classList.toggle('hidden');
    });
}
```

*Always append your specific frontend UI logic to `uiexo.js` and generic styling fixes to `docs/css/exoui.css`.*
