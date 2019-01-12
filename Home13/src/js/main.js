$(document).ready(function () {
  $('a').click(function (event) {
    event.preventDefault()
  })
  let tdList = $('.to-do-list')
  let tdMask = 'tdl_' //mask for localStorage key

  //declaration function to show saved task from localStorage
  function showTasks () {
    let isLen = localStorage.length
    if (isLen > 0) {
      for (let i = 0; i < isLen; i++) {
        let key = localStorage.key(i)
        if (key.indexOf(tdMask) === 0) {
          $('<li class="to-do-item list-group-item"><a href="#" class="task-name">' + localStorage.getItem(key) + '</a><a href="#" class="edit-task">rename</a><a href="#" class="delete-task">del</a></li>')
            .attr('data-itemId', key)
            .appendTo(tdList)
        }
      }
    }
  }

  showTasks()
  $('.add-new-task').on('click', function () {
    let newTaskName = prompt('Enter new task name', 'Another new task')
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
      localStorage.setItem(tdMask + nId, newTaskName)

      $('<li class="to-do-item list-group-item"><a href="#" class="task-name">' + newTaskName + '</a><a href="#" class="edit-task">rename</a><a href="#" class="delete-task">del</a></li>')
        .attr('data-itemId', tdMask + nId)
        .appendTo(tdList)
    }
  })
  $('.container').on('click', '.edit-task', function () {
    let newTaskName = prompt('Edit task name', 'Another new task')
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
