function headerNav() {
    const openSearchButton = document.querySelector('[data-open-search]');
    const searchInput = document.querySelector('[data-search-input]');
    const backButton = document.querySelector('[data-back]');
    const searchResults = document.querySelector('[data-search-results]');
    const logo = document.querySelector('[data-logo]');

    openSearchButton.addEventListener('click', ()=> {
        toggleView();
        searchInput.value = "";
        searchResults.innerHTML = "";
    });
    backButton.addEventListener('click', ()=> {
        if (searchInput.classList.contains('hidden')) {
            window.history.back();
        } else {
            toggleView();
        }
    });

    searchInput.addEventListener('keypress', () => {
        document.querySelectorAll('[data-drinks] a').forEach( (cocktail) =>{
            let change = Math.floor(Math.random() * 3) + 1;
            if (change === 1) {
                cocktail.classList.toggle('hidden');
            }
        });
    });

    function toggleView() {
        searchInput.classList.toggle('hidden');
        if (logo) {
            backButton.classList.toggle('hidden');
            logo.classList.toggle('hidden');
        }
        searchResults.classList.toggle('hidden');
        openSearchButton.classList.toggle('hidden');
    }
}


window.addEventListener('DOMContentLoaded', (event) => {
    headerNav();
});
