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
      SecureToken : "1e17595c-0658-402f-a2d7-98358298bc2f",
      To : 'pixelcrystalgamesofficial@gmail.com',
      From : "pixelcrystalgamesofficial@gmail.com",
      Subject : "Name: " + fname.value + " | " + "Email: " + email.value,
      Body : "" + message.value
  }).then(
    message => alert(message)
  );

})

//USERNAME AND PASSWORD
//pixelcrystalgamesofficial@gmail.com
//D7131BF0A03401A3117059434777657FA77C

// TOKEN
//1e17595c-0658-402f-a2d7-98358298bc2f