const body = document.body;
const cardsupport = document.getElementById("support_contact");
const buttonchat_close = document.getElementById("joki_chat_close");
const buttonchat_open = document.getElementById("support_open_but");

const orderggs = document.getElementById('order_gg');
const buttonorder = document.getElementById('pop_jok_button');

const popup = document.getElementById('popup_awal');
const buttonpop = document.getElementById('popup_button');

if (sessionStorage.getItem('popup') == null) {
    body.style.overflowY = "hidden";
    popup.classList.remove("hidden");
    popup.classList.add("flex");
} else {
        popup.classList.remove("flex");
        popup.classList.add("hidden");
        body.style.overflowY = "scroll";
}
if(sessionStorage.getItem('chat')=="open"){
    body.style.overflowY = "hidden";
    cardsupport.style.display = "flex";
}

function togglePopup() {
    if (popup.classList.contains("flex")) {
        hidePopup();
    } else {
        showPopup();
    }
}

// Function to hide the popup
function hidePopup() {
    popup.classList.remove("flex");
    popup.classList.add("hidden");
    body.style.overflowY = "scroll";
    sessionStorage.setItem('popup', 'gas');
}

// Function to show the popup
function showPopup() {
    popup.classList.remove("hidden");
    popup.classList.add("flex");
    body.style.overflowY = "hidden";
}

// Event listener for popup click
popup.addEventListener("click", togglePopup);

// Event listener for buttonpop click
buttonpop.addEventListener("click", () => {
    body.style.overflowY = "scroll";
    popup.style.display = "none";
    sessionStorage.setItem('popup', 'gas');
});



buttonchat_open.addEventListener('click', ()=> {
    body.style.overflowY="hidden"; 
    cardsupport.style.display = "flex";
    sessionStorage.setItem('chat', 'open');
    buttonchat_open.classList.add("hidden");
})

buttonchat_close.addEventListener('click', () => {
cardsupport.style.display = "none";
body.style.overflowY="scroll";
sessionStorage.setItem('chat', 'close');
buttonchat_open.classList.remove("hidden");
});

buttonorder.addEventListener("click", ()=> {
    body.style.overflowY = "scroll"
    orderggs.classList.remove("flex")
    orderggs.classList.add("hidden")
});


