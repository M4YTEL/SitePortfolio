// selectors
const themeToggleBtn = document.querySelector('.theme-toggle input[type="checkbox"]');

// state
const theme = localStorage.getItem('theme');

// on mount
theme && document.body.classList.add(theme);

// handlers
handleThemeToggle = () => {
    document.body.classList.toggle('dark-mode');
    // console.log('Thème basculé'); 
    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark-mode');
    
    }else {
        localStorage.removeItem('theme');
    }
};
// events
themeToggleBtn.addEventListener('click', handleThemeToggle);







