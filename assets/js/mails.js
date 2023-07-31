const contactForm = document.getElementById('form');
const submitBtn = document.getElementById('submitbtn');
const nameInput =  document.getElementById('name');
const emailInput = document.getElementById('email');
const subjectInput = document.getElementById('subject');
const messageInput = document.getElementById('message');


//Get Needed data from email JS
const publickey = 'WbtPBxdXq5qitkKNu';
const serviceID = 'service_9mkhl4i';
const templateID = 'template_6i5qr4s';


//Initializa email JS with public key
emailjs.init(publickey)

contactForm.addEventListener('submit', e => {
    e.preventDefault();

    submitBtn.innerText = 'Just A Moment...';

    const inputFields = {
        name: nameInput.value,
        email: emailInput.value,
        message: messageInput.value,
        subject: subjectInput.value
        
    }

    emailjs.send(serviceID, templateID, inputFields)
    .then(() => {
        submitBtn.innerText = 'Message Sent Successfully';

        nameInput.value = '';
        emailInput.value = '';
        messageInput.value = '';
        subjectInput.value = '';

        setTimeout(() => {
            submitBtn.innerText = 'Send Message';
        }, 3000);
        
    }, (error) => {
        console.log(error);

        submitBtn.innerText = 'Something went wrong';
    })
    
})