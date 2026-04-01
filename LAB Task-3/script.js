let board = ["", "", "", "", "", "", "", "", ""];
let player = "X";
let gameOver = false;

let container = document.getElementById("grid-container");
let cells = [];

let display = document.getElementById("display-id");

for (let i = 0; i < container.children.length; i++) {

    let row = container.children[i];

    for (let j = 0; j < row.children.length; j++) {
        cells.push(row.children[j]);
    }
}


for (let i = 0; i < cells.length; i++) {

    cells[i].addEventListener("click", function () {
        play(i);
    });
}

function play(index) {

    if (board[index] !== "" || gameOver) {
        return;
    }

    board[index] = player;
    cells[index].innerText = player;

    checkWinner();

    if (!gameOver) {
        if (player === "X") {
            player = "O";
        }
        else {
            player = "X";
        }
    }
}

function checkWinner() {

    if (
        (board[0] === board[1] && board[1] === board[2] && board[0] !== "") ||
        (board[3] === board[4] && board[4] === board[5] && board[3] !== "") ||
        (board[6] === board[7] && board[7] === board[8] && board[6] !== "") ||

        (board[0] === board[3] && board[3] === board[6] && board[0] !== "") ||
        (board[1] === board[4] && board[4] === board[7] && board[1] !== "") ||
        (board[2] === board[5] && board[5] === board[8] && board[2] !== "") ||

        (board[0] === board[4] && board[4] === board[8] && board[0] !== "") ||
        (board[2] === board[4] && board[4] === board[6] && board[2] !== "")
    ) {
        display.innerText = player + " wins!";
        gameOver = true;
        return;
    }

    if (!board.includes("")) {
        display.innerText = "Draw!";
        gameOver = true;
    }
}
let resetBtn = document.getElementById("resetBtn");

resetBtn.addEventListener("click", function () {
    board = ["", "", "", "", "", "", "", "", ""];

    for (let i = 0; i < cells.length; i++) {
        cells[i].innerText = "";
    }

    player = "X";
    gameOver = false;

    display.innerText = "";
});