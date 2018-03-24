/**
 * Created by kaa on 23.07.2017.
 */
var message="Правая кнопка мыши отключена!";
function click(e) {
    if (document.all) {    // IE
        if (event.button == 2) {    // Чтобы отключить левую кнопку поставьте цифру 1
            alert(message);    // чтобы отключить среднюю кнопку поставьте цифру 1
            return false;}
    }
    if (document.layers) { // NC
        if (e.which == 3) {
            alert(message);
            return false;}
    }
}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);}
document.onmousedown=click;
document.oncontextmenu=function(e){return false};
