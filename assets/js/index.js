const loginbtn = document.getElementById("loginbtn");
const logincard = document.getElementById("logincard");
const regbtn = document.getElementById("regbtn");
const regcard = document.getElementById("regcard");

loginbtn.onclick = () => {
    logincard.style.display = "block";
    regcard.style.display = "none";
};

regbtn.onclick = () => {
    logincard.style.display = "none";
    regcard.style.display = "block";
};

function ValidateEmail(inputText) {
    var mailformat = /^\d{9}@+(s.mu.edu.sa)+$/;
    if (inputText.value.match(mailformat)) {
        alert("Valid email address!");
        document.form1.text1.focus();
        return true;
    } else {
        alert("You have entered an invalid email address!");
        document.form1.text1.focus();
        return false;
    }
}

function ValidateEmail2(inputText) {
    var mailformat = /^\d{9}@+(s.mu.edu.sa)+$/;
    if (inputText.value.match(mailformat)) {
        alert("Valid email address!");
        document.form1.text1.focus();
        return true;
    } else {
        alert("You have entered an invalid email address!");
        document.form1.text1.focus();
        return false;
    }
}
