const passwordBtn = document.querySelector('#password');
const changeBtn = document.querySelector('.form .field i');

changeBtn.onclick = () => {
    if(passwordBtn.type === "password"){
        passwordBtn.type = "text"
        
    }else if(passwordBtn.type === "text"){
        passwordBtn.type = "password"
    }
}

// const nameInput = document.querySelector('#name');
// const lastNameInput = document.querySelector('#last-name');
// const emailInput = document.querySelector('#email');
// const passwordInput = document.querySelector('#password');
// const continueBtn = document.querySelector('#continue-button');
// const errorField = document.querySelector(".form form .error-txt")

// console.log(errorField)
// const chechForm = () => {
//     if(nameInput.value === ''){
//         errorField.style.display = "block";
//         errorField.textContent = "Wszystkie pola muszą być uzupełnione!"
//         nameInput.style.border = "1px solid red"
//     }if(lastNameInput.value === ''){
//         errorField.style.display = "block";
//         errorField.textContent = "Wszystkie pola muszą być uzupełnione!"
//         lastNameInput.style.border = "1px solid red"
//     }
//     if(emailInput.value === ''){
//         errorField.style.display = "block";
//         errorField.textContent = "Wszystkie pola muszą być uzupełnione!"
//         emailInput.style.border = "1px solid red"
//     } if(passwordInput.value === ''){
//         errorField.style.display = "block";
//         errorField.textContent = "Wszystkie pola muszą być uzupełnione!"
//         passwordInput.style.border = "1px solid red"
//     }

    
// }
// continueBtn.addEventListener('click', chechForm)