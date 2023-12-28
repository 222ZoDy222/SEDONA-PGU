let modal = document.querySelector('.modal-container')
let closeButton = document.querySelector('.modal-close-button');
let searchButton = document.querySelector('.search-button');
let adultMinusButton = document.querySelector('.button-minus-adults');
let adultPlusButton = document.querySelector('.button-plus-adults');
let childrenMinusButton = document.querySelector('.button-minus-children');
let childrenPlusButton = document.querySelector('.button-plus-children');
let adultAmountInput = document.querySelector('#input-amount-adults');
let childrenAmountInput = document.querySelector('#input-amount-children');

searchButton.onclick = function () {
  modal.classList.add('modal-open');
}

closeButton.onclick = function () {
  modal.classList.remove('modal-open');
}

adultMinusButton.onclick = function () {
  if (adultAmountInput.value > 0) {
    adultAmountInput.value--;
  }
}

adultPlusButton.onclick = function () {
  if (adultAmountInput.value < 99) {
    adultAmountInput.value++;
  }
}

childrenMinusButton.onclick = function () {
  if (childrenAmountInput.value > 0) {
    childrenAmountInput.value--;
  }
}

childrenPlusButton.onclick = function () {
  if (childrenAmountInput.value < 99) {
    childrenAmountInput.value++;
  }
}
