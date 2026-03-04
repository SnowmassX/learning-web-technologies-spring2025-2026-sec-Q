let calculator = document.getElementById("calculator");
let display = document.createElement("input");
display.type = "text";
calculator.appendChild(display);

let values = [
    "7","8","9","/",
    "4","5","6","*",
    "1","2","3","-",
    "0","C","=","+"
];

let firstNumber = "";
let secondNumber = "";
let operator = "";

for (let i = 0; i < values.length; i++) {

    let value = values[i];
    let btn = document.createElement("button");
    btn.innerText = value;

    btn.addEventListener("click", function () {

        if (value >= "0" && value <= "9") {

            if (operator === "") {
                firstNumber += value;
                display.value = firstNumber;
            } else {
                secondNumber += value;
                display.value = secondNumber;
            }
        }

        else if (value === "+" || value === "-" || value === "*" || value === "/") {
            operator = value;
        }

        else if (value === "C") {
            firstNumber = "";
            secondNumber = "";
            operator = "";
            display.value = "";
        }

        else if (value === "=") {

            let num1 = Number(firstNumber);
            let num2 = Number(secondNumber);
            let result = 0;

            if (operator === "+") result = num1 + num2;
            else if (operator === "-") result = num1 - num2;
            else if (operator === "*") result = num1 * num2;
            else if (operator === "/") result = num1 / num2;

            display.value = result;

            firstNumber = result.toString();
            secondNumber = "";
            operator = "";
        }

    });

    calculator.appendChild(btn);
}