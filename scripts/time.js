
function timeFunction() {
    var today = new Date();
    var month = today.getMonth();
    var year = today.getFullYear();
    var day = today.getDate();
    var fullDate = day +"-"+ month +"-"+  year; 
    document.getElementById("fullDate").innerHTML = fullDate; 
    
    var h= today.getHours();
    var m= today.getMinutes();
    var s= today.getSeconds();
    var fullTime = h +":"+ m +":"+s;

    document.getElementById("fullTime").innerHTML = fullTime;   
    refreshInterval(); 
}

function refreshInterval()
{
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('timeFunction()',refresh)
    
}

















