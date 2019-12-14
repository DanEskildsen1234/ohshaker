function headerNav() {
    const openSearchButton = document.querySelector('[data-open-search]');
    const SearchInput = document.querySelector('[data-search-input]');
    const backButton = document.querySelector('[data-back]');
    const searchResults = document.querySelector('[data-search-results]');
    const logo = document.querySelector('[data-logo]');

    openSearchButton.addEventListener('click', ()=> {
        toggleView();
        SearchInput.value = "";
        searchResults.innerHTML = "";
    });
    backButton.addEventListener('click', ()=> {
        if (SearchInput.classList.contains('hidden')) {
            window.history.back();
        } else {
            toggleView();
        }
    });

    function toggleView() {
        SearchInput.classList.toggle('hidden');
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
