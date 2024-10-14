document.addEventListener('DOMContentLoaded', () => {
    // LOGIN
    const loginForm = document.getElementById('login');
    if (loginForm) {
        loginForm.addEventListener('submit', handleFormSubmit);

        function handleFormSubmit(event) {
            event.preventDefault(); 
    
            const formData = new FormData(loginForm);
            const email = formData.get('email');
            const password = formData.get('password');
    
            if (email && password) {
                console.log('Email:', email);
                console.log('Password:', password);
            } else {
                console.error('Please fill in both fields.');
            }
        }   
    }

    // REGISTER
    const registerForm = document.getElementById('register');
    if (registerForm) {
        registerForm.addEventListener('submit', handleRegisterSubmit);

        function handleRegisterSubmit(event) {
            event.preventDefault(); 
            const formData = new FormData(registerForm);
    
            const name = formData.get('name');
            const email = formData.get('email');
            const password = formData.get('password');
    
            if (name && email && password) {
                console.log('Register Name:', name);
                console.log('Register Email:', email);
                console.log('Register Password:', password);
            } else {
                console.error('Please fill in all fields.');
            }
        }
    }
});
