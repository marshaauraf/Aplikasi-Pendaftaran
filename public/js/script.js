const hamBurger = document.querySelector("#toggle-btn");
const sidebar = document.querySelector("#sidebar");

hamBurger.addEventListener("click", function() {
    sidebar.classList.toggle("expand");
});
