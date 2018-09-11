// Initialize Firebase
var config = {
    apiKey: "your api key",
    authDomain: "your,
    databaseURL: "your",
    projectId: "your",
    storageBucket: "your",
    messagingSenderId: "your"
};
firebase.initializeApp(config);

//get elements casting them
const btnSignin = document.getElementById("signin");
const btnSignup = document.getElementById("signup");
const txtemail = document.getElementById("inputEmail");
const txtpass = document.getElementById("inputPassword");
const txterror = document.getElementById("error");

//sign in
btnSignin.addEventListener('click',e=>{
    //get values
    const email =  txtemail.value;
    const pass = txtpass.value;
    const auth = firebase.auth();
    //sign in
    const promise = auth.signInWithEmailAndPassword(email,pass);
    promise.catch(e=>{
        var errormsg = e.message;
        //console.log(errormsg);
        txterror.innerHTML = errormsg;
    });
});


//sign up
btnSignup.addEventListener('click',e=>{
    //test button
    // console.log("btn signup");
    //get values
    const email =  txtemail.value;
    const pass = txtpass.value;
    const auth = firebase.auth();
    //sign in
    const promise = auth.createUserWithEmailAndPassword(email,pass);
    promise.catch(e=>{
        var errormsg = e.message;
       // console.log(errormsg);
        txterror.innerHTML = errormsg;
    });

});

//log out


firebase.auth().onAuthStateChanged(firebase=>{
    if(firebase){
        document.cookie = "username="+firebase['uid']+";";
        //console.log(firebase);

        //redirect to dashboard
       window.location = "dashboard.php";

    }
    else{
        console.log("User not login");
    }
});

