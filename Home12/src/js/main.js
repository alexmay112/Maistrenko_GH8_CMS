'use strict'
;(function () {
  let viewer = document.getElementById('viewer')

  function factorial () {
    let num = +prompt('Введіть число', 1)

    function sFact (num) {
      let rval = 1
      for (let i = 2; i <= num; i++) {
        rval = rval * i
      }
      return rval
    }

    let result = sFact(num)
    viewer.innerHTML = +result
  }

  let buttonFact = document.getElementById('factorial')
  buttonFact.addEventListener('click', factorial, false)

  function funcCos () {
    let num = +prompt('Введіть величину кута в радіанах', 1)
    let result = Math.cos(num)
    viewer.innerHTML = +result
  }

  let buttonCos = document.getElementById('cos')
  buttonCos.addEventListener('click', funcCos, false)

  function funcSin () {
    let num = +prompt('Введіть величину кута в радіанах', 1)
    let result = Math.sin(num)
    viewer.innerHTML = +result

  }

  let buttonSin = document.getElementById('sin')
  buttonSin.addEventListener('click', funcSin, false)

  function funcSqrt () {
    let num = +prompt('Введіть число', 1)
    let result = Math.sqrt(num)
    viewer.innerHTML = +result
  }

  let buttonSqrt = document.getElementById('sqrt')
  buttonSqrt.addEventListener('click', funcSqrt, false)

  function funcPlus () {
    let num1 = +prompt('Введіть число', 1)
    let num2 = +prompt('Введіть число', 1)
    let result = num1 + num2
    viewer.innerHTML = +result
  }

  let buttonPlus = document.getElementById('plus')
  buttonPlus.addEventListener('click', funcPlus, false)

  function funcMinus () {
    let num1 = +prompt('Введіть число', 1)
    let num2 = +prompt('Введіть число', 1)
    let result = num1 - num2
    viewer.innerHTML = +result
  }

  let buttonMinus = document.getElementById('minus')
  buttonMinus.addEventListener('click', funcMinus, false)

  function funcTimes () {
    let num1 = +prompt('Введіть число', 1)
    let num2 = +prompt('Введіть число', 1)
    let result = num1 * num2
    viewer.innerHTML = +result
  }

  let buttonTime = document.getElementById('times')
  buttonTime.addEventListener('click', funcTimes, false)

  function funcDivision () {
    let num1 = +prompt('Введіть число', 1)
    let num2 = +prompt('Введіть число', 1)
    let result = num1 / num2
    viewer.innerHTML = +result
  }

  let buttonDivision = document.getElementById('division')
  buttonDivision.addEventListener('click', funcDivision, false)

  function funcPow () {
    let num1 = +prompt('Введіть число', 1)
    let num2 = +prompt('Введіть степінь', 1)

    function pow (num1, num2) {
      let res = num1
      for (let i = 1; i <= (num2 - 1); i++) {
        res = res * num1
      }
      if (num1 === 0 && num2 === 0) {
        res = 1
        return res
      }
      return res
    }

    let result = pow(num1, num2)
    viewer.innerHTML = +result
  }

  let buttonPow = document.getElementById('pow')
  buttonPow.addEventListener('click', funcPow, false)

  function funcClear () {
    document.getElementById('viewer').innerHTML = '0'
  }

  let ce = document.getElementById('ce')
  ce.addEventListener('click', funcClear, false)

}())
