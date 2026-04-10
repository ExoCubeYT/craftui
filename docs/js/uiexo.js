document.addEventListener('DOMContentLoaded', () => {

    // 1. Button Logic
    const btnShowcase = document.getElementById('button-showcase');
    if (btnShowcase) {
        const snippet = document.getElementById('button-snippet');
        const btns = btnShowcase.querySelectorAll('.btn-demo');
        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                const variant = btn.getAttribute('data-variant');
                const text = variant.charAt(0).toUpperCase() + variant.slice(1);
                snippet.textContent = `<x-craftui-button variant="${variant}">${text}</x-craftui-button>`;
            });
        });
    }

    // 2. Icon Logic
    const iconShowcase = document.getElementById('icon-showcase');
    if (iconShowcase) {
        const snippet = document.getElementById('icon-snippet');
        const icons = iconShowcase.querySelectorAll('.icon-demo');
        icons.forEach(btn => {
            btn.addEventListener('click', () => {
                const iconName = btn.getAttribute('data-icon');
                snippet.textContent = `<x-craftui-icon name="${iconName}" size="xl" />`;
                
                // Update active states
                icons.forEach(i => {
                    const wrapper = i.querySelector('.icon-wrapper');
                    const label = i.querySelector('.icon-label');
                    if (i === btn) {
                        wrapper.classList.add('scale-110', '-translate-y-1', 'drop-shadow-[0_0_8px_rgba(255,255,255,0.4)]');
                        label.classList.remove('opacity-0');
                        label.classList.add('opacity-100');
                    } else {
                        wrapper.classList.remove('scale-110', '-translate-y-1', 'drop-shadow-[0_0_8px_rgba(255,255,255,0.4)]');
                        label.classList.remove('opacity-100');
                        label.classList.add('opacity-0');
                    }
                });
            });
        });
    }

    // 3. Dropdown Logic
    const dropdownShowcase = document.getElementById('dropdown-showcase');
    if (dropdownShowcase) {
        const toggle = document.getElementById('dropdown-toggle');
        const menu = document.getElementById('dropdown-menu');
        const labelText = document.getElementById('dropdown-label');
        const snippet = document.getElementById('dropdown-snippet');
        const options = dropdownShowcase.querySelectorAll('.dropdown-option');

        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
        });

        document.addEventListener('click', () => {
            menu.style.display = 'none';
        });

        options.forEach(opt => {
            opt.addEventListener('click', (e) => {
                e.stopPropagation();
                const text = opt.getAttribute('data-option');
                labelText.textContent = text;
                snippet.textContent = `<x-craftui-dropdown label="${text}">`;
                menu.style.display = 'none';
                
                // Active state coloring
                options.forEach(o => {
                    if(o === opt) {
                        o.classList.add('bg-[#313233]', 'text-white');
                    } else {
                        o.classList.remove('bg-[#313233]', 'text-white');
                    }
                });
            });
        });
    }

    // 4. Tooltip Logic
    const tooltipShowcase = document.getElementById('tooltip-showcase');
    if (tooltipShowcase) {
        const target = document.getElementById('tooltip-target');
        const popover = document.getElementById('tooltip-popover');
        
        target.addEventListener('mouseenter', () => {
            popover.style.display = 'block';
            setTimeout(() => { popover.classList.remove('opacity-0'); }, 10);
        });
        
        target.addEventListener('mouseleave', () => {
            popover.classList.add('opacity-0');
            setTimeout(() => { popover.style.display = 'none'; }, 150);
        });
    }

    // 5. Alert Logic
    const alertShowcase = document.getElementById('alert-showcase');
    if (alertShowcase) {
        const btns = alertShowcase.querySelectorAll('.alert-demo');
        const boxes = {
            'success': document.getElementById('alert-success'),
            'warning': document.getElementById('alert-warning'),
            'error': document.getElementById('alert-error')
        };
        const snippet = document.getElementById('alert-snippet');
        
        const alertContent = {
            'success': { icon: 'diamond', text: 'Cover Me With Diamonds' },
            'warning': { icon: 'creeper', text: 'Creeper approaching from behind.' },
            'error': { icon: 'sword', text: 'Failed to execute command.' }
        };

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                const type = btn.getAttribute('data-alert');
                
                // Hide all, show target
                Object.values(boxes).forEach(box => {
                    box.classList.remove('block');
                    box.classList.add('hidden');
                });
                boxes[type].classList.remove('hidden');
                boxes[type].classList.add('block');
                
                // Update snippet
                const { icon, text } = alertContent[type];
                snippet.textContent = `<x-craftui-alert type="${type}" icon="${icon}">\n    ${text}\n</x-craftui-alert>`;
                
                // Active button state
                btns.forEach(b => {
                    if (b === btn) {
                        b.classList.remove('text-gray-500', 'border-transparent');
                        b.classList.add('text-white', 'border-white/10');
                    } else {
                        b.classList.add('text-gray-500', 'border-transparent');
                        b.classList.remove('text-white', 'border-white/10');
                    }
                });
            });
        });
    }

    // 6. Progress Bar Logic
    const progressShowcase = document.getElementById('progress-showcase');
    if (progressShowcase) {
        const slider = document.getElementById('progress-slider');
        const levelInput = document.getElementById('level-input');
        const fillDisplay = document.getElementById('progress-fill-display');
        const levelDisplay = document.getElementById('progress-level-display');
        const valLabel = document.getElementById('progress-val-label');
        const snippet = document.getElementById('progress-snippet');

        function updateProgress() {
            const val = slider.value;
            const lvl = levelInput.value;
            
            fillDisplay.style.width = val + '%';
            valLabel.textContent = val;
            
            if (lvl === '' || lvl < 0) {
                levelDisplay.style.display = 'none';
                snippet.textContent = `<x-craftui-progress value="${val}" />`;
            } else {
                levelDisplay.style.display = 'block';
                levelDisplay.textContent = lvl;
                snippet.textContent = `<x-craftui-progress value="${val}" level="${lvl}" />`;
            }
        }

        slider.addEventListener('input', updateProgress);
        levelInput.addEventListener('input', updateProgress);
    }

});
