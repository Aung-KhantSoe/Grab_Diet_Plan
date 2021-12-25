
function getname() { 
     
        document.getElementById("namedisplay").innerHTML = "Hello " + document.getElementById("name").value;
}

// function toggle(theform) { 
//     document.getElementById("form1").style.display = 'none'; 
//     document.getElementById("form2").style.display = 'none'; 
//     document.getElementById(theform).style.display = "block"; 
// } 

function toggle(id) {
    var e = document.getElementById(id);
    // if(e.style.display == 'block')
    //    e.style.display = 'none';
    // else
    //    e.style.display = 'block';
    if (id == "form1") {
        
        document.getElementById('form2').style.display = 'none';
        document.getElementById('form1').style.display = 'block';
        
        document.getElementById('agelb').required = false;
        document.getElementById('heightft').required = false;
        document.getElementById('weightlbs').required = false;
        document.getElementById('targetweightlbs').required = false;
        document.getElementById('emaillb').required = false;

        document.getElementById('age').required = true;
        document.getElementById('heightcm').required = true;
        document.getElementById('weightkg').required = true;
        document.getElementById('targetweightkg').required = true;
        document.getElementById('email').required = true;
    }
    
    if(id == "form2"){
        
        document.getElementById('form1').style.display = 'none';
        document.getElementById('form2').style.display = 'block';

        document.getElementById('age').required = false;
        document.getElementById('heightcm').required = false;
        document.getElementById('weightkg').required = false;
        document.getElementById('targetweightkg').required = false;
        document.getElementById('email').required = false;

        document.getElementById('agelb').required = true;
        document.getElementById('heightft').required = true;
        document.getElementById('weightlbs').required = true;
        document.getElementById('targetweightlbs').required = true;
        document.getElementById('emaillb').required = true;
    }
 }
