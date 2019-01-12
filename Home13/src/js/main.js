$(document).ready(function () {

  $('a').click(function (event) {
    event.preventDefault()
  })

  $('.add-new-task').on('click', function () {
    let newTaskName = prompt('Enter new task name', 'Another new task')
    if (newTaskName === '' || newTaskName === ' ') {
      alert('Name of task must be filled.')
    } else {
      $('.to-do-list').append(`
  <li class="to-do-item list-group-item">
    <a href="#" class="task-name">${newTaskName}</a>
    <a href="#" class="edit-task">rename</a>
    <a href="#" class="delete-task">del</a>
  </li>`)
    }
  })

  // $('.container').on('click', '.to-do-item', function () {
  //   $(this).find('.edit-task, .delete-task').toggleClass('show')
  // })

  $('.container').on('click', '.edit-task', function () {
    let newTaskName = prompt('Edit task name', 'Another new task')
    if (newTaskName === '' || newTaskName === ' ') {
      alert('Name of task must be filled.')
    } else {
      $(this).parent().find('.task-name').text(newTaskName)
    }
  })

  $('.container').on('click', '.delete-task', function () {
    let answer = confirm('This will delete current task. Are you sure?')
    if (answer) {
      $(this).parent().remove()
    }
  })
})
