let toggle = document.getElementById('passwordToggler');
console.log(toggle);
toggle.addEventListener('click', function(){
    const passwordInput = document.getElementById('password');
    const attribute = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', attribute);
    if(toggle.classList.contains('fa-eye')){
        toggle.classList.remove('fa-eye')
        toggle.classList.add('fa-eye-slash')
    } else {
        toggle.classList.add('fa-eye')
        toggle.classList.remove('fa-eye-slash')
    }
})