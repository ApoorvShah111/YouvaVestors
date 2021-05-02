// JavaScript source code
var finalStr;
var final;
function FormSubmit()
{   //Purpose
    var a = 0;
    var A = [["Large Cap,",0.15], ["Dividend,",0.30], ["Small and Middle Cap,",0.25], ["Large and Middle Cap,",0.2]];
    if (document.getElementById("retirement").checked == true) {
        a = 0;
    }
    saving
    if (document.getElementById("Divident").checked == true) {
        a = 1;
    }
    if (document.getElementById("saving").checked == true) {
        a = 3;
    }
    if (document.getElementById("return").checked == true) {
        a = 2;
    }
    //Risk Taking
    var b = 0;
    var B = ["Equity Fund.", "Hybrid Fund.", "Liquid Fund."];
    if (document.getElementById("high").checked == true) {
        b = 0;
    }
    if (document.getElementById("med").checked == true) {
        b = 1;
    }
    if (document.getElementById("low").checked == true) {
        b = 2;
    }
    //Time
    var c = 0;
    var C = [[1,1],[1,5],[5,10],[25,25]];
    if (document.getElementById("BelowOne").checked == true) {
        c = 0;
    }
    if (document.getElementById("OneToFive").checked == true) {
        c = 1;
    }
    if (document.getElementById("FiveToTen").checked == true) {
        c = 2;
    }
    if (document.getElementById("Above25").checked == true) {
        c = 3;
    }
    //payment
    var d = 0;
    if (document.getElementById("Lumpsum").checked == true) {
        d = 0;
    }
    if (document.getElementById("RegularInterval").checked == true) {
        d = 2;
    }
    var e = 0;
    e = document.getElementById("InvVal").value;
    //storing yet to be doneeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
    finalStr = A[a, 0] + B[b, 0];
    if (a == 2) {
        document.getElementById("trial").innerHTML=A[2];
    }
    //Prompting
    window.alert("Response is Saved");
    //RedirectingTo Home
    location.replace("Dir.php");

 
    final = 0;
    if (d == 0) {
        final = InvVal + (InvVal * (A[a][1]) * (C[c][1]));
    }
    if (d == 1) {
        final = InvVal + InvVal * (Math.pow(1 + ((A[a][1]) * 100) / 12), (12 * (C[c][1])) - 1) / (((A[a][1]) * 100) / 12) * (1 + ((A[a][1]) * 100) / 12);
    }
    //storing yet to be doneeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
}
function display()
{
    document.getElementById("finalstr").innerHTML="Suggested Scheme: "+ finalStr;
    document.getElementById("final").innerHTML="Estimated Value: "+ final;
}
