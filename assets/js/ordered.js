window.addEventListener('DOMContentLoaded', (event) => {
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
});
