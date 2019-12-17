function headerNav() {
    const openSearchButton = document.querySelector('[data-open-search]');
    const searchInput = document.querySelector('[data-search-input]');
    const backButton = document.querySelector('[data-back]');
    const searchResults = document.querySelector('[data-search-results]');
    const logo = document.querySelector('[data-logo]');
    const title = document.querySelector('[data-title]');

    openSearchButton.addEventListener('click', ()=> {
        toggleView();
        searchInput.value = "";
    });
    backButton.addEventListener('click', ()=> {
        if (searchInput.classList.contains('hidden')) {
            window.history.back();
        } else {
            toggleView();
        }
    });

    searchInput.addEventListener('keypress', () => {
        searchResults.querySelectorAll('a').forEach( (cocktail) =>{
            let change = Math.floor(Math.random() * 3) + 1;
            if (change === 1) {
                cocktail.classList.add('hidden');
            }
        });
    });

    searchInput.addEventListener("keydown", function(e){
        searchResults.querySelectorAll('a').forEach( (cocktail) =>{
            let change = Math.floor(Math.random() * 2) + 1;
            if(e.code === "Backspace" && change === 1) {
                cocktail.classList.remove('hidden');
            }
        });
    });

    function toggleView() {
        searchInput.classList.toggle('hidden');
        if (logo) {
            backButton.classList.toggle('hidden');
            logo.classList.toggle('hidden');
        }
        if (title) {
            title.classList.toggle('hidden');
        }
        document.querySelector('main').classList.toggle('hidden');
        searchResults.classList.toggle('hidden');
        openSearchButton.classList.toggle('hidden');
    }
}

function accordions() {
    document.querySelectorAll('[data-expand-less]').forEach( (button) => {
        button.addEventListener('click', (e) => {
            const section = e.target.parentElement;
            section.querySelectorAll('a').forEach( (cocktail) => { cocktail.hidden = false });
            section.querySelector('[data-expand-less]').classList.toggle('hidden');
            section.querySelector('[data-expand-more]').classList.toggle('hidden');
        });
    });
    document.querySelectorAll('[data-expand-more]').forEach( (button) => {
        button.addEventListener('click', (e) => {
            const section = e.target.parentElement;
            section.querySelectorAll('a').forEach( (cocktail) => { cocktail.hidden = true });
            section.querySelector('[data-expand-less]').classList.toggle('hidden');
            section.querySelector('[data-expand-more]').classList.toggle('hidden');
        });
    });
}



window.addEventListener('DOMContentLoaded', (event) => {
    headerNav();
    accordions();
    document.querySelector('body').style.opacity = 1;
});
