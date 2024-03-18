// Get the email input element
const emailInput = document.getElementById('email');

// Add an event listener to the email input element
emailInput.addEventListener('blur', function() {
  // Get the entered email value
  const email = emailInput.value;

  // Check if the email domain is not "@ashesi.edu.gh"
  if (!email.endsWith('@ashesi.edu.gh') && email !== '') {
    // Display an alert message
    alert('Please enter an Ashesi email address.');
    
    // Clear the email input field
    emailInput.value = '';
  }
});
// Get the password input element
const passwordInput = document.getElementById('password');

// Add an event listener to the password input element
passwordInput.addEventListener('blur', function() {
  // Get the entered password value
  const password = passwordInput.value;

  // Check if the password is weak
  if (password.length < 8 && password !== '') {
    // Display an alert message
    alert('Please enter a strong password with at least 8 characters.');
    
    // Clear the password input field
    passwordInput.value = '';
  }
});



