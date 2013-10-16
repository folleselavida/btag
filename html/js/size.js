var winW = 630, winH = 460;

function size(){
    if (document.body && document.body.offsetWidth) {
     winW = document.body.offsetWidth;
     winH = document.body.offsetHeight;
    }
    if (document.compatMode=='CSS1Compat' &&
        document.documentElement &&
        document.documentElement.offsetWidth ) {
     winW = document.documentElement.offsetWidth;
     winH = document.documentElement.offsetHeight;
    }
    if (window.innerWidth && window.innerHeight) {
     winW = window.innerWidth;
     winH = window.innerHeight;
    }
    var izq = (winW-1265)/2;
    document.getElementById("master").style.marginLeft = izq + "px";
    
    var izqForm = (winW-736)/2;
    $('.int_edit_site').css('margin-left', izqForm + 'px');
    
    var izqOfe = (winW-552)/2;
    $('.int_edit_ofe').css('margin-left', izqOfe + 'px');
    $('.int_edit_eve').css('margin-left', izqOfe + 'px');
}

window.onresize = function(event) {
    size();
};

$(document).ready(function() {
	  size();
});