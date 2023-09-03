function time(){
    var date = new Date();
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    if(hour > 12){
        am_pm = "PM";
    }
    else{
        am_pm = "AM";
    }

    if(hour > 12){
        hour = hour - 12;   
    }

    min = checkTime(min);
    sec = checkTime(sec);
    var show_time = hour + ":" + min + ":" + sec + " " + am_pm;
    document.getElementById('time').innerHTML= show_time;
    setTimeout(time, 1000);
}
function checkTime(i){
    if(i<10){
        i = "0" + i;
    }
    return i;
}