const orderggs = document.getElementById('order_gg')
const button = document.getElementById('pop_jok_button')

button.addEventListener("click", ()=> {
    body.style.overflowY = "scroll"
    orderggs.classList.remove("flex")
    orderggs.classList.add("hidden")
});