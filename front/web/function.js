function includeHTML() {
    const includes = document.querySelectorAll('[data-include]');
    includes.forEach(el => {
        let file = el.getAttribute('data-include');
        fetch(file)
            .then(response => {
                if (!response.ok) throw new Error(`Could not load ${file}: ${response.statusText}`);
                return response.text();
            })
            .then(data => {
                el.innerHTML = data;
            })
            .catch(err => console.error(err));
    });
}
includeHTML() ; 