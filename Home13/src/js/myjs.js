$(document).ready(function () {

  $('someElement').css('border', '1px solid red')
  $('someElement').addClass('.active')
  $('someElement').removeClass('.active')
  $('someElement').toggleClass('.active')
  $('someElement').empty() //удалить содержимое элемента
  $('someElement').remove() //удалить сам элемент
  $('someElement').clone() //удалить сам элемент

  $('someElement').height(200)
  let hButton = $('someElement').height()
  $('someElement').height(hButton).css('border', '1px solid red')
  $('someElement').html('<p class="some-class">Текст</p>')
  $('someElement').text('Текст')
  $('someElement').val('Текст')

  let prTxt = $('someElement').text()
  $('someElement').text(prTxt)

  $('someElement').append('<p>Some text</p>'); // добавить внутрь элемента
  $('someElement').appendTo('someElement2'); // добавить к элементу
  $('someElement').after('<p>Some text</p>'); //после элемента

  $('someElement').wrap('<div class="about"></div>');
  $('someElement').wrapAll('<div class="about"></div>'); // все элементы на странице обернуть в div
  $('someElement').wrapInner('<div class="about"></div>'); // содержимое элемента обернуть в div
  $('someElement').replaceWith('<div class="about"></div>'); // вместо элемента - указанный div




  $('a').click(function (event) {
    event.preventDefault()
  })
  let tdList = $('.to-do-list')
  let keyMask = 'key_'

  function showTasks () {
    let isLen = localStorage.length
    if (isLen > 0) {
      for (let i = 0; i < isLen; i++) {
        let key = localStorage.key(i)
        if (key.indexOf(keyMask) === 0) {
          $('<li class="to-do-item list-group-item"><a href="#" class="task-name">' + localStorage.getItem(key) + '</a><a href="#" class="edit-task">rename</a><a href="#" class="delete-task">del</a></li>')
            .attr('data-itemId', key)
            .appendTo(tdList)
        }
      }
    }
  }

  showTasks()

  $('.add-new-task').on('click', function () {
    let newTaskName = prompt('Enter new task name', 'New task')
    if (newTaskName === '' || newTaskName === ' ') {
      alert('Name of task must be filled.')
    } else {
      let nId = 0
      tdList.children().each(function (index, el) {
        let jelId = $(el).attr('data-itemId').slice(4)
        if (jelId > nId)
          nId = jelId
      })
      nId++
      localStorage.setItem(keyMask + nId, newTaskName)

      $('<li class="to-do-item list-group-item"><a href="#" class="task-name">' + newTaskName + '</a><a href="#" class="edit-task">rename</a><a href="#" class="delete-task">del</a></li>')
        .attr('data-itemId', keyMask + nId)
        .appendTo(tdList)
    }
  })

  $('.container').on('click', '.edit-task', function () {
    let newTaskName = prompt('Edit task name', 'Renamed task')
    if (newTaskName === '' || newTaskName === ' ') {
      alert('Name of task must be filled.')
    } else {
      $(this).parent().find('.task-name').text(newTaskName)
      let key = $(this).parent().attr('data-itemId')
      localStorage.setItem(key, newTaskName)
    }
  })

  $('.container').on('click', '.delete-task', function () {
    let answer = confirm('This will delete current task. Are you sure?')
    if (answer) {
      let key = $(this).parent().attr('data-itemId')
      localStorage.removeItem(key)
      $(this).parent().remove()
    }
  })
})
