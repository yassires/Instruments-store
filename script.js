


const password = document.getElementById("password");
const email = document.getElementById("email");
const form = document.getElementById("login");
const errorEmail = document.getElementById("errorEmail");
const errorPassword = document.getElementById("errorPassword");

form.addEventListener("submit", (e) => {
    var index = 0;
    if (email.value === "" || email.value == null) {
        index++;
        email.classList.add("is-invalid");
        errorEmail.innerHTML = "Adress email is required to sign into your account.";
    } else {
        email.classList.remove("is-invalid");
        errorEmail.innerHTML = "Looks Good !";
        email.classList.add("is-valid");
        
    }

    if (password.value === "" || password.value == null) {
        index++;
        password.classList.add("is-invalid");
        errorPassword.innerHTML = "Enter a valid password !!";
    } else {
        password.classList.remove("is-invalid");
        password.classList.add("is-valid");
        errorPassword.innerHTML = "Looks Good !";
    }
    if (index > 0) {
        e.preventDefault();
    }
});

// function getInfo(){
// 	require('database.php');
// }

function edit(id){
    document.getElementById("pdt-id").value=id
    document.getElementById("pdt-delete-btn").style.display="block";
    document.getElementById("pdt-update-btn").style.display="block";
    document.getElementById("pdt-save-btn").style.display="none";
    document.getElementById("pdt-title").value=document.getElementById("name"+id).getAttribute('title');
    document.getElementById("pdt-description").value = document.getElementById("description"+id).getAttribute('desc');
    document.getElementById("pdt-price").value = document.getElementById("price"+id).getAttribute('price_pdt');
    document.getElementById("pdt-quantity").value = document.getElementById("quantity"+id).getAttribute('quantity_pdt');

    console.log(document.getElementById("name"+id).getAttribute('id'));
    }


function addbtn(){
    alert('test');
    document.getElementById("pdt-delete-btn").style.display="none";
    document.getElementById("pdt-update-btn").style.display="none";
    document.getElementById("pdt-save-btn").style.display="block";
    document.getElementById("form-task").reset();
    
    }





    