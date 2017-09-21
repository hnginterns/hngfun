const screenEl = document.getElementsByClassName("screen")[0];
const clearEl = document.getElementsByClassName("cls")[0];
const exprEl = document.getElementsByClassName("expr")[0];

let firstVal = null;
let secondVal = null;
let currentOp;
let tempExpr = "";
let op = ["+", "-", "*", "/", "="];
let equalTo = false;
let del = false;

const initHandler = () => {
  firstVal = 0;
  currentOp = "+";
  const buttons = [...document.getElementsByClassName("button")];
  buttons.forEach(button =>
    button.addEventListener("click", buttonClickHandler)
  );
};

let hack = false;
const buttonClickHandler = event => {
  let val = event.target.innerHTML;
  if (val === "Del") {
    display("");
    equalTo = false;
    if (firstVal === 0 && secondVal === null && tempExpr === "") {
      displayExpr("");
      return;
    } else if (tempExpr === "" && firstVal.toString().length < 2) {
      reset();
      displayExpr("");
    } else if (hack && tempExpr === "") {
      currentOp = "+";
      tempExpr = "";
      displayExpr(firstVal);
      hack = false;
    } else if (tempExpr === "" && firstVal.toString().length > 1) {
      del = true;
      firstVal = Number(firstVal.toString().slice(0, -1));
      displayExpr(firstVal);
    } else if (firstVal === 0 && tempExpr !== "") {
      tempExpr = tempExpr.toString().slice(0, -1);
      displayExpr(tempExpr);
    } else if (tempExpr.length < 2) {
      tempExpr = "";
      displayExpr(firstVal, currentOp);
    } else {
      tempExpr = tempExpr.toString().slice(0, -1);
      displayExpr(firstVal, currentOp, tempExpr);
    }
  } else if (val === "CLS") {
    tempExpr = "";
    reset();
    display(tempExpr);
    displayExpr("");
  } else if (val === ".") {
    if (!tempExpr.includes(".")) {
      experimental(".");

    }
  } else if (op.includes(val)) {
    if (firstVal !== null) {
      //debugger;
      del = false;
      secondVal = tempExpr !== "" ? Number(tempExpr) : 0;
      tempExpr = "";
      firstVal = doOp();
      display(firstVal);
      if (equalTo) equalTo = false;
      if (val !== "=") {
        hack = true;
        currentOp = val;
        displayExpr(firstVal, currentOp);
      } else {
        hack = false;
        currentOp = "+";
        tempExpr = "";
        equalTo = true;
        displayExpr("");
      }
    }
  } else {
    experimental(val);
  }
};

// called this experiment cos I seemed to be duplicating code and i thought i'd refactor 
// it into a function
const experimental = (val) => {
  if (tempExpr.length > 12) return;
  if (equalTo) {
    equalTo = false;
    reset();
  }
  if (!del) tempExpr += val;
  else firstVal = Number(firstVal.toString() + val);
  //  display(tempExpr);
  if (secondVal === null) displayExpr(tempExpr);
  else {
    if (!del) displayExpr(firstVal, currentOp, tempExpr);
    else displayExpr(firstVal);
  };
}

const display = expr => {
  const disp = expr.toString().length > 13 ?
    Number.prototype.toExponential.call(Math.round(expr)) :
    expr;
  screenEl.innerHTML = disp.toString().length > 13 ? "stack overflow!" : disp;
  exprEl.innerHTML = `${firstVal} ${currentOp} ${tempExpr}`;
};

const displayExpr = (...args) => {
  expr = args.reduce((acc, x) => `${acc} <br>${x} `, "");
  exprEl.innerHTML = expr;
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
  del = false;
};

window.onload = initHandler();