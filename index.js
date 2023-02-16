const fname = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const submit = document.getElementsByClassName('form-contact')[0];

submit.addEventListener('submit',(e)=>{
    e.preventDefault();
    console.log("Clicked");

    let ebody = `
    <b>Name:</b>${fname.value}
    <br>
    <b>Email:</b>${email.value}
    <br>
    <b>Message:</b>${message.value}
    <br>
    `

    Email.send({
        SecureToken : "eb74bed4-2f63-4d2f-b5ed-c2afa36ad543",
        To : 'pixelcrystalgamesofficial@gmail.com',
        From : "pixelcrystalgamesofficial@gmail.com",
        Subject : "Email from: " + email.value,
        Body : "" + message.value
    }).then(
      message => alert("Send Succesfull!")
    );
})