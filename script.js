box= document.getElementById('box');
box1= document.getElementById('box1');
box2= document.getElementById('box2');
box3= document.getElementById('textbox');
btn= document.getElementById('btn');
error= document.getElementById('err')
btn.addEventListener('click', ()=>{
    if(box.value==''){
        
        box.style.border='2px solid red';
    }
    else{
        error.innerText=''
        box.style.border='2px solid black';
    }
    if(box1.value==''){
        
        box1.style.border='2px solid red';
    }
    else{
        error.innerText=''
        box1.style.border='2px solid black';
    }
    if(box2.value==''){
        
        box2.style.border='2px solid red';
    }
    else{
        error.innerText=''
        box2.style.border='2px solid black';
    }
    if(box3.value==''){
        
        box3.style.border='2px solid red';
    }
    else{
        error.innerText=''
        box3.style.border='2px solid black';
    }
})