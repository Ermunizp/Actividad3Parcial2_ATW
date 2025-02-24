document.addEventListener("DOMContentLoaded", function () {
    window.onpopstate = function () {
        loadPage(window.location.pathname);
    };

    document.querySelectorAll("a[data-route]").forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const route = this.getAttribute("href");
            history.pushState(null, "", route);
            loadPage(route);
        });
    });

    function loadPage(route) {
        let content = document.getElementById("app");
        axios.get(route)
            .then(response => {
                content.innerHTML = response.data;
            })
            .catch(error => {
                content.innerHTML = "<p>Error al cargar la página</p>";
            });
    }
});