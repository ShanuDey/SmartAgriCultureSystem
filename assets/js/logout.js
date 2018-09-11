var config = {
    apiKey: "your",
    authDomain: "your",
    databaseURL: "your",
    projectId: "your",
    storageBucket: "your",
    messagingSenderId: "your"
};
firebase.initializeApp(config);
//firebase auth logout
const btnlogout = document.getElementById("logout");
btnlogout.addEventListener('click',e=>{
    firebase.auth().signOut();
    document.cookie="username=;";
    window.location = "login.php";
});
