const body = document.body
const card = document.getElementById("support_contact")
const button = document.getElementById("joki_chat_close")
const button_open = document.getElementById("support_open_but")

button_open.addEventListener('click', ()=> {
    body.style.overflowY="hidden"; 
    card.style.display = "flex";
})

button.addEventListener('click', () => {
card.style.display = "none";
body.style.overflowY="scroll";
});