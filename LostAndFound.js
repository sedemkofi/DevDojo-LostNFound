const form = document.getElementById('signup');
const name = document.getElementById('name');
const lastname = document.getElementById('lastname');
const password = document.getElementById('password');
const email = document.getElementById('email');


form.addEventListener('submit', (e) =>{
  let messages = []
  if (name.value === '' || name.value == null){
    messages.push('Name is required')

  } 
  if (password.value.length <= 6){
    messages.push('Password must be at least 6 characters')
  }
  if (password.value.length >= 20) {
    messages.push('Password must be at least 6 characters')
  } 
  if(password.value === 'password'){
    messages.push('Password cannot be password')
  }
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = message.join(',')
  }
})