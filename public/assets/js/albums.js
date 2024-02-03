let i = 0;
let imgArray = ['../img/kanye1.jpg','../img/kanye2.jpg','../img/kanye3.jpg'];

function changeImg(){
    document.getElementById('slideshow').src = imgArray[i];

    if(i< imgArray.length -1){
        i++;
    }
    else{
        i=0;
    }
}
document.addEventListener(onload, changeImg());