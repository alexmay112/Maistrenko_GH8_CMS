function sFact (a) {
  for (let i = 2; i <= a; i++) {
    a = a * i
  }
  return a
}

function funcCos (a) {
  return Math.cos(a)
}

function funcSin (a) {
  return Math.sin(a)
}

function funcSqrt (a) {
  if (a < 0) {
    alert('Корінь від\'ємного числа не існує!')
  } else {
    return Math.sqrt(a)
  }
}

function funcPlus (a, b) {
  return a + b
}

function funcMinus (a, b) {
  return a - b
}

function funcTimes (a, b) {
  return a * b
}

function funcDivision (a, b) {
  return a / b
}

function pow (a, b) {
  let res = a
  for (let i = 1; i <= (b - 1); i++) {
    res = res * a
  }
  if (a === 0 && b === 0) {
    res = 1
    return res
  }
  return res
}
