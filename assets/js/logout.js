var config = {
    apiKey: "AIzaSyDEO4WhDnwOIcHU_jCjbXYuIzMDqH3srYc",
    authDomain: "testfirebaseweb-f2a72.firebaseapp.com",
    databaseURL: "https://testfirebaseweb-f2a72.firebaseio.com",
    projectId: "testfirebaseweb-f2a72",
    storageBucket: "testfirebaseweb-f2a72.appspot.com",
    messagingSenderId: "561023838877"
};
firebase.initializeApp(config);
//firebase auth logout
const btnlogout = document.getElementById("logout");
btnlogout.addEventListener('click',e=>{
    firebase.auth().signOut();
    document.cookie="username=;";
    window.location = "login.php";
});
