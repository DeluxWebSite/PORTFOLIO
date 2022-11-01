(function dataSale() {
    let date = new Date();
    let m = new Date();
    if (date.getDay()) { m.setDate(date.getDate() + 8 - date.getDay()) }
    else { m.setDate(date.getDate() + 1) }
    document.querySelector('#header-date').textContent = m.toLocaleDateString();
})();

