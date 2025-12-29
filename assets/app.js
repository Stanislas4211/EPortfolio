import './styles/app.css';

// ===== MODE JOUR/NUIT =====

document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const html = document.documentElement;

    // Mettre à jour l'icône selon le thème actuel
    const savedTheme = localStorage.getItem('theme') || 'light';
    updateIcon(savedTheme);

    // Écouter le clic sur le bouton
    themeToggle.addEventListener('click', function() {
        if (html.classList.contains('dark-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    });

    function enableDarkMode() {
        html.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
        updateIcon('dark');
    }

    function disableDarkMode() {
        html.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
        updateIcon('light');
    }

    function updateIcon(theme) {
        if (theme === 'dark') {
            themeIcon.classList.remove('bi-moon-fill');
            themeIcon.classList.add('bi-sun-fill');
        } else {
            themeIcon.classList.remove('bi-sun-fill');
            themeIcon.classList.add('bi-moon-fill');
        }
    }
});
