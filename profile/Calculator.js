function Calculator(num){
 return {
  answer : num ? num : 0,
  equals : function() {
    return this.answer
  },
  add : function(num) {
    this.answer += num ? num : 1
    return this
  },
  subtract : function(num) {
    this.answer -= num ? num : 1
    return this
  },
  multiply : function(num) {
    this.answer *= num ? num : 1
    return this
  },
  divide : function(num) {
    this.answer /= num ? num : 1
    return this
  },
  modulo  : function(num) {
    this.answer %= num ? num : 1
    return this
  },
  invert : function(num) {
    this.answer = this.answer * -1
    return this
  }, 
  clear : function() {
    this.answer = 0
    return this
  }
 }
}
 
var calc = new Calculator()
 
console.log("Calculator adds 5 multiplies by 4 and divides by 2")
calc.add(5).multiply(4).divide(2)
console.log("Calculator = " + calc.equals())
 
console.log("Calculator adds one to the answer")
calc.add()
console.log("Calculator = " + calc.equals())
 
console.log("Calculator inverts the answer")
calc.invert()
console.log("Calculator = " + calc.equals())
 
console.log("Calculator resets")
calc.clear()
console.log("Calculator = " + calc.equals())
 
console.log("new calculator starts at 10 and finds the remainder after dividing by 3")
var calculator = new Calculator(10).modulo(3)
console.log("Calculator = " + calculator.equals())