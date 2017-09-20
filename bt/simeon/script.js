const screenEl = document.getElementsByClassName("screen")[0];
const clearEl = document.getElementsByClassName("cls")[0];

let firstVal = null;
let secondVal = null;
let currentOp;
let tempExpr = "";
let op = ["+", "-", "*", "/", "="];
let equalTo = false;

const initHandler = () => {
  firstVal = 0;
  currentOp = "+";
  const buttons = [...document.getElementsByClassName("button")];
  buttons.forEach(button =>
    button.addEventListener("click", buttonClickHandler)
  );
};

const buttonClickHandler = event => {
  let val = event.target.innerHTML;
  if (val === "CLS") {
    tempExpr = "";
    reset();
    display(tempExpr);
  } else if (val === ".") {
    if (!tempExpr.includes(".")) {
      if (tempExpr.length > 12) return;
      tempExpr += val;
      display(tempExpr);
    }
  } else if (op.includes(val)) {
    if (firstVal !== null && tempExpr !== "") {
      //debugger;
      secondVal = Number(tempExpr);
      tempExpr = "";
      firstVal = doOp();
      display(firstVal);
      if (equalTo) equalTo = false;
      if (val !== "=") currentOp = val;
      else {
        currentOp = "+";
        tempExpr = "0";
        equalTo = true;
      }
    }
  } else {
    if (tempExpr.length > 12) return;
    if (equalTo) {
      equalTo = false;
      reset();
    }
    tempExpr += val;
    display(tempExpr);
  }
};

const display = expr => {
  const disp = expr.toString().length > 13
    ? Number.prototype.toExponential.call(Math.round(expr))
    : expr;
  screenEl.innerHTML = disp.toString().length > 13 ? "can't display" : disp;
};

const doOp = () => {
  switch (currentOp) {
    case "+":
      return firstVal + secondVal;
      break;

    case "-":
      return firstVal - secondVal;
      break;

    case "*":
      return firstVal * secondVal;
      break;

    case "/":
      return firstVal / secondVal;
      break;
  }
};

const reset = () => {
  firstVal = 0;
  currentOp = "+";
  secondVal = null;
};

window.onload = initHandler();
