const form = document.getElementById('newsletterForm');
// const alert = document.querySelector('.alert');

const firebaseConfig = {

    apiKey: "AIzaSyCeSiQHMHN3iLKlQZuHXTzj72pEGpLEEfw",

    authDomain: "form-3d730.firebaseapp.com",

    databaseURL: "https://form-3d730-default-rtdb.firebaseio.com",

    projectId: "form-3d730",

    storageBucket: "form-3d730.appspot.com",

    messagingSenderId: "11218832654",

    appId: "1:11218832654:web:d9e3eb0b1a757bddb01b5f"

  };


  // Initialize Firebase

  firebase.initializeApp(firebaseConfig);

  const database = firebase.database()

  const ref = database.ref('Newsletter');


form.addEventListener('submit', (e) => {
    e.preventDefault();
    const newsletterData =  document.getElementById('newsletter').value;

    ref.push( {
        newsletterData : newsletter
    })
    //  alert.style.display = 'block';

    //  setTimeout(() => {
    //     alert.style.display = 'none'
    //  }, 2000)
    form.reset();
})