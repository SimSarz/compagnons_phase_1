const accordionButtons = document.querySelectorAll('.accordion_button');

if (accordionButtons) {
    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            const accordionDropdown = button.nextElementSibling;
            const isVisible = accordionDropdown.classList.contains('open');
            const buttonIcon = button.querySelector('.material-symbols-outlined');
            const accordionContainer = button.closest('.accordion');

            // Réinitialiser tous les boutons et fermer les dropdowns
            accordionButtons.forEach(btn => {
                const dropdown = btn.nextElementSibling;
                const icon = btn.querySelector('.material-symbols-outlined');
                const container = btn.closest('.accordion');
                
                if (btn !== button) {
                    dropdown.classList.remove('open');
                    container.classList.remove('accordion_bg_compagnons', 'accordion_bg_festival', 'accordion_bg_vents', 'accordion_bg_forge');
                    icon.textContent = "expand_more";
                }
            });

            // Gérer l'état du bouton actuel
            if (!isVisible) {
                accordionDropdown.classList.add('open');
                buttonIcon.textContent = "expand_less";
                if (accordionContainer.classList.contains('accordion_compagnons')) {
                    accordionContainer.classList.add('accordion_bg_compagnons');
                } else if (accordionContainer.classList.contains('accordion_festival')) {
                    accordionContainer.classList.add('accordion_bg_festival');
                } else if (accordionContainer.classList.contains('accordion_vents')) {
                    accordionContainer.classList.add('accordion_bg_vents');
                } else if (accordionContainer.classList.contains('accordion_forge')) {
                    accordionContainer.classList.add('accordion_bg_forge');
                }
            } else {
                accordionContainer.classList.remove('accordion_bg_compagnons', 'accordion_bg_festival', 'accordion_bg_vents', 'accordion_bg_forge');
                accordionDropdown.classList.remove('open');
                buttonIcon.textContent = "expand_more";
            }
        });
    });    
}








