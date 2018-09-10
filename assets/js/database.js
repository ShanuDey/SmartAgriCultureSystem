var uid = document.cookie.split(";")[0].split("=")[1];
console.log(uid);
if(uid==""){
    window.location="login.php";
}
//read data form firebase
firebase.database().ref(uid+"/sensor/").on("value",function(snapshot){
    data = snapshot.val();
    for(var i in data){
      //  console.log(i+" : "+data[i]);
        if(i=="pump") {
            if(data[i]=="1"){
            	document.getElementById(i).innerHTML = "pump on";
                document.getElementById("pumpimg").src="assets/images/tapon.png";
            }
            else{
            	document.getElementById(i).innerHTML = "pump off";
                document.getElementById("pumpimg").src="assets/images/tapoff.png";
            }
        }
        else{
        	document.getElementById(i).innerHTML = data[i];	
        }
    }
});

const btn_on = document.getElementById("buttonOn");
const btnoff = document.getElementById("buttonOff");
btn_on.addEventListener('click', e=>{
  // console.log("Button on");
   insertfb(1);
});
btnoff.addEventListener('click',e=>{
   // console.log("button off");
    insertfb(0);
});

//writing data to database
function insertfb(pumpstate){
    console.log(pumpstate);
    firebase.database().ref(uid+"/sensor/pump").set(pumpstate);
}