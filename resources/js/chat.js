import axios from "axios"

const messages = document.getElementById('messages')
const message = document.getElementById('message')
const chatForm = document.getElementById('chat-form')

const url = new URL(window.location)
let username = url.searchParams.get('username')

console.log(username)

chatForm.addEventListener('submit', e => {
  e.preventDefault()

  if(message.value == '') {
    alert('Escribe un mensaje')
    return
  }

  axios.post('/send-message', {
    username: username,
    message: message.value
  })
  .then(function(response){
    console.log(response)
  })
  .catch(function(error){
    console.log(error)
  })

  message.value = ''
  message.focus()
});

window.Echo.channel('larachat')
  .listen('ChatEvent', res => {
    messages.innerHTML += `<p>
      <strong>${res.username}</strong>: ${res.message}
    </p>`
  })