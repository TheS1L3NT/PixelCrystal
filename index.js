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
      SecureToken : "212adc62-35ec-4976-9f5e-30be464dc100",
      To : 'pixelcrystalgamesofficial@gmail.com',
      From : "pixelcrystalgamesofficial@gmail.com",
      Subject : "Email from: " + email.value,
      Body : "" + message.value
  }).then(
    message => alert(message)
  );
})

