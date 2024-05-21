document.getElementById('signupForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const password = document.getElementById('password').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const messageElement = document.getElementById('message');

    // Simulated existing users
    const existingUsers = ['Alice', 'Bob', 'Charlie'];

    if (existingUsers.includes(name)) {
        messageElement.textContent = 'User already exists!';
        messageElement.style.color = 'red';
    } else {
        messageElement.textContent = `Congratulations ${name}! You have successfully signed in.`;
        messageElement.style.color = 'green';

        // Optionally add the new user to the existing users list
        existingUsers.push(name);
        
        // Clear the form
        document.getElementById('signupForm').reset();
    }
});
