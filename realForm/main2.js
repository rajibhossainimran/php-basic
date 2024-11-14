document.getElementById('username').addEventListener('keyup', function (event) {
    const getName = event.target.value;
    const nameBoder = document.getElementById('username');
    const setMessage = document.getElementById('message');
    if (getName.length < 4 || getName.length > 15) {
        nameBoder.style.borderColor = '#ff0000';
        setMessage.textContent = 'Name must be between 4 and 15 characters';
        setMessage.style.color = '#ff0000';
    } else {
        nameBoder.style.borderColor = '#228B22';
        setMessage.textContent = '';
        setMessage.style.color = '#228B22';
    }
});

document.getElementById('email').addEventListener('keyup', function () {
    const emailFiled = document.getElementById('email');
    const setPass = document.getElementById('emailMessage');
    const emailPattern = /^[a-z-0-9._%+-]+@[a-z-0-9.-]+\.[a-z]{2,}$/;
    if (emailPattern.test(emailFiled.value)) {
        emailFiled.style.borderColor = '#228B22';
        setPass.textContent = '';
        setPass.style.color = '#228B22';
    } else {
        emailFiled.style.borderColor = '#ff0000';
        setPass.textContent = 'Please enter a valid email';
        setPass.style.color = "#ff0000";
    }
})

document.getElementById('password').addEventListener('keyup', function () {
    const password = document.getElementById('password');
    const setEmailErr = document.getElementById('passMessage');
    const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (passwordPattern.test(password.value)) {
        password.style.borderColor = '#228B22';
        setEmailErr.textContent = '';
        setEmailErr.style.color = '#228B22';
    } else {
        password.style.borderColor = '#ff0000';
        setEmailErr.textContent = 'password must be 8 characters, one Uppercase and one Digit';
        setEmailErr.style.color = "#ff0000";
    }
});


document.getElementById('submit').addEventListener('click', function () {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;


    if (username && email && password) {

        let round = '';
        let gender = '';
        let certificate = '';
        for (i = 0; i < document.formm.edu.length; i++) {
            if (document.formm.edu[i].checked) {
                certificate += document.formm.edu[i].value + ' ,';
            }
        }
        for (i = 0; i < document.formm.round.length; i++) {
            if (document.formm.round[i].selected) {
                round = document.formm.round[i].value;
            }
        }
        for (i = 0; i < document.formm.gen.length; i++) {
            if (document.formm.gen[i].checked) {
                gender = document.formm.gen[i].value;
            }
        }


        doc = open('', '', 'width=450px,height=450px,margin-left=200px');
        with (doc.document) {
            write("<body style ='background-color:teal; padding:10px 20px; font-size:18px; color:#2F4F4F;'>");
            write("<h1 style='color:white;'>Login Successfull</h1>")
            write("<div style ='background-color:white;border:2px solid white; padding:10px; border-radius:20px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>")
            write("Name : " + username + '<br><br>');
            write("Email : " + email + '<br><br>');
            write("Password : " + password + '<br><br>');
            write("Round : " + round + '<br><br>');
            write("Gender : " + gender + '<br><br>');
            write("Certificate : " + certificate + '<br><br>');
            write('<button style="background-color:#CD5C5C; padding:7px 30px ; border-radius:5px; margin-right:30px;border: none;"  onclick="window.close()">Close</button>');
            write('<button  style="background-color:#556B2F; padding:7px 30px ; border-radius:5px;border: none;" onclick="self.print()">Print</button>')

        }
    } else {
        alert('please fill up the form');
        return;
    }
})