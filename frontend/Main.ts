const button_left = document.getElementById("button_left");
const button_right = document.getElementById("button_right");
const images = document.getElementsByName("image");
console.log(images);
let position = 0;

function Left_swipe() {
if(position==0)
{
    return;
}
else 
{  
    images[position].style.display = "none"; 
    images[position-1].style.setProperty('display', 'block', 'important');
    position--;
}
}
function Right_swipe() {
    if(position<2)
    {  
    images[position].style.display = "none"; 
    images[position+1].style.setProperty('display', 'block', 'important');
    position++;
}
}