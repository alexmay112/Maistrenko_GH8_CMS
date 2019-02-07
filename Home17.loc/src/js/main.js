$(document).ready(function () {
  $('#inputConfirmPassword').keyup(validate)
})

function validate () {
  let password1 = $('#inputPassword').val()
  let password2 = $('#inputConfirmPassword').val()

  if (password1 === password2) {
    $('#validate-status').text('')
    $('input[type="submit"]').unbind()
  } else {
    $('input[type="submit"]').click(function (event) {
      event.preventDefault()
      $('#inputConfirmPassword').focus()
    })
    $('#validate-status').text('Passwords do not match')
  }
}
