//get form element and input fields
const form = document.getElementById('signup');
const name = document.getElementById('name');
const lastname = document.getElementById('lastname');
const password = document.getElementById('password');
const email = document.getElementById('email');

//add event listener to handle form submission
form.addEventListener('submit', (e) =>{
  let messages = []
  if (name.value === '' || name.value == null){ //check if name field is empty
    messages.push('Name is required')

  } 
  //check if password length is less than or equal to 6 characters
  if (password.value.length <= 6){
    messages.push('Password must be at least 6 characters')
  }

  //check if password length is less than or equal to 6 characters
  if (password.value.length >= 20) {
    messages.push('Password must be at least 6 characters')
  } 
  //check if password is password
  if(password.value === 'password'){
    messages.push('Password cannot be password')
  }
  if (!email.value.endsWith('@ashesi.edu.gh')) {
    messages.push('Email must be a valid Ashesi University email')
}
  //prevent form submission if there are errors
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = message.join(',') //display error message
  }
})
