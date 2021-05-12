const nextPage1 = document.querySelector(".nextpage1");
const nextPage2 = document.querySelector(".nextPage2");
const nextPage3 = document.querySelector(".nextPage3");


const page1 = document.querySelector(".page1");
const page2 = document.querySelector(".page2");
const page3 = document.querySelector(".page3");
const page4 = document.querySelector(".page4");
const sponsor = document.querySelector(".displaysponsorname");
const form = document.querySelector("#form");
const sponsorUsername = document.querySelector("#sponsorUsername");

//import functions
import {registerNewMember} from './functions.js';

// Get Url Parameters
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('ref');
if (myParam) {
    page1.style.display = 'none';
    page2.style.display = 'block';
    sponsor.innerHTML = myParam;
}


//Page 1 Next Button
nextPage1.addEventListener("click",(e)=>{
    console.log(12345);
    page1.style.display = 'none';
    page2.style.display = 'block';
    if (sponsorUsername.value == '') {
        sponsor.innerHTML = 'CashRaiseCircle';
    } else {
        sponsor.innerHTML = sponsorUsername.value;
    }
})

//Page 2
nextPage2.addEventListener("click",(e)=>{
    e.preventDefault();
    page1.style.display = 'none';
    page2.style.display = 'none';
    page3.style.display = 'block';
    document.querySelector(".checkOut").style.display = 'block';
    document.querySelector(".cashRaise").style.display = 'none';
    document.querySelector(".checkOut").innerHTML = 'Create Password'
})

//Page 3
nextPage3.addEventListener("click",(e)=>{
    e.preventDefault();
    page1.style.display = 'none';
    page2.style.display = 'none';
    page3.style.display = 'none';
    page4.style.display = 'block';
    document.querySelector(".checkOut").style.display = 'block';
    document.querySelector(".cashRaise").style.display = 'none';
    document.querySelector(".checkOut").innerHTML = 'Check Out';
})

//Paystack 
function payWithPaystack(body) {
    var handler = PaystackPop.setup({
      key: 'pk_test_59e20d93339e463e7211b2079ac5c47a16bdfda1', // Replace with your public key
      email:body.email,
      amount: 2499 * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
      currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
      ref:body.ref, // Replace with a reference you generated
      callback: function(response) {
        //this happens after the payment is completed successfully
        var reference = response.reference;
        // registerNewMember({username,firstname,surname,gender,country,phoneNumber,sponsor,email,ref,password}).then(request=>{
        //     console.log(request);
        // });
        registerNewMember(body).then(request=>{
            console.log(request);
        });
        // console.log(request);
        alert('Payment complete! Reference: ' + reference);
        // Make an AJAX call to your server with the reference to verify the transaction
      },
      onClose: function() {
        alert('Transaction was not completed, window closed.');
      },
    });
    handler.openIframe();
  }

//Form Submission
form.addEventListener("submit",async(e)=>{
    e.preventDefault();
    let sponsorUsername = form.sponsorUsername.value;
    let sponsor = '';
    if (sponsorUsername == '') {
        sponsor = 'CashRaiseCircle';
    } else {
        sponsor = sponsorUsername;
    }
    const surname = form.surname.value;
    const email = form.email.value;
    const firstname = form.firstname.value;
    const gender = form.gender.value;
    const country = form.country.value;
    const phoneNumber = form.phoneNumber.value;
    const username = form.username.value;
    const password = form.password.value;
    const ScndPassword = form.password1.value;
    const ref = Math.floor(Math.random() * 1234099595);
    registerNewMember({username,firstname,surname,gender,country,phoneNumber,sponsor,email,ref,password}).then(request=>{
        console.log(request);
    });
    // console.log(surname,firstname,gender,password,ScndPassword);
    payWithPaystack({username,firstname,surname,gender,country,phoneNumber,sponsor,email,ref,password});
    // const request = await sendRequest()
    // console.log(request);
})

