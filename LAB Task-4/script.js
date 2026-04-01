const unitPrice = 1000;
const quantityInput = document.getElementById("quantity");
const totalPriceInput = document.getElementById("totalPrice");

let couponShown = false;

quantityInput.addEventListener("input", function () {
    let quantity = parseInt(quantityInput.value);

    if (isNaN(quantity) || quantity < 0) {
        quantity = 0;
        quantityInput.value = 0;
    }

    let total = unitPrice * quantity;
    totalPriceInput.value = total;

    if (total > 1000 && !couponShown) {
        alert("🎉 You are eligible for a gift coupon!");
        couponShown = true;
    }

    if (total <= 1000) {
        couponShown = false;
    }
});