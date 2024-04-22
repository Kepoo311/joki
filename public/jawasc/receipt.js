const items = document.querySelectorAll('#item');
const receipt = document.getElementById('receipt');

items.forEach((item) => {
   item.addEventListener('click', () => {
        const proCard = document.getElementById('proCard').dataset.imgName;
        const item_name = item.querySelector('#item_name').textContent;
        const item_price = item.querySelector('#item_price').textContent;

        const data = showReceipt(proCard,item_name, item_price);

        receipt.classList.remove('hidden');
        receipt.classList.add('flex');
        receipt.innerHTML = data;
   });
});

function showReceipt(card,name,price) {
    return `
    <img id="receipt_img" class="h-28 w-24 m-3" src="{{ asset('proCard/${card}') }}" alt="GAS">
                             <div class="flex flex-col mt-2">
                                <h1 id="receipt_packet" class="text-white font-monts font-semibold">${name}</h1>
                                <h1 id="receipt_price" class="text-white font-monts font-light">${price}</h1>
                             </div>
    `
}