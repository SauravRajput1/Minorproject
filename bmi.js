function getbmivalue(){
    var weight=document.getElementById('weight').value;
    var height=document.getElementById('height').value;
    var newbmivalue = weight/height/height*10000;
    newbmivalue=Math.round(newbmivalue);
    document.getElementById('bmivalue').value = newbmivalue;
}