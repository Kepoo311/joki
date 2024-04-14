const popup = document.getElementById('popup_awal');
const buttonpop = document.getElementById('popup_button');
const body = document.body;


if (sessionStorage.getItem('popup') == null) {
    body.style.overflowY = "hidden";
    popup.classList.remove("hidden");
    popup.classList.add("flex");
} else {
        popup.classList.remove("flex");
        popup.classList.add("hidden");
        body.style.overflowY = "scroll";
}

buttonpop.addEventListener("click", ()=> {
    if (popup.classList.contains("flex")){
        popup.classList.remove("flex");
        popup.classList.add("hidden");
        body.style.overflowY = "scroll";  
    sessionStorage.setItem('popup', 'gas');
    } else {
        popup.classList.remove("hidden");
        popup.classList.add("flex");
        body.style.overflowY = "hidden";
    }
});
