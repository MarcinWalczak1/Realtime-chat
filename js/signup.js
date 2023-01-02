const form = document.querySelector('.signup form');
const ctnBtn = form.querySelector('#continue-button');
const errorField = document.querySelector(".error-txt")

form.onsubmit = (e) => {
    e.preventDefault();
}

ctnBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data)
                if(data == 'Success'){
                    location.href = "users.php";

                }else{
                    errorField.textContent = data;
                    errorField.style.display = 'block';

                }
            }
        }

    }
    let formData = new FormData(form);
    xhr.send(formData);
}