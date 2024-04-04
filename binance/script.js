function cancel(){
    document.getElementById("add").style.display = "none";
}

document.getElementById("image1").style.display = "block";
document.getElementById("image2").style.display = "none";
document.getElementById("image3").style.display = "none";

document.getElementById("text1").style.textDecoration = "underline";
document.getElementById("text2").style.textDecoration = "none";
document.getElementById("text3").style.textDecoration = "none";

function desk(){
document.getElementById("image1").style.display = "block";
document.getElementById("image2").style.display = "none";
document.getElementById("image3").style.display = "none";

document.getElementById("text1").style.textDecoration = "underline";
document.getElementById("text2").style.textDecoration = "none";
document.getElementById("text3").style.textDecoration = "none";
}
function phone(){
    document.getElementById("image1").style.display = "none";
    document.getElementById("image2").style.display = "block";
    document.getElementById("image3").style.display = "none";
    
    document.getElementById("text1").style.textDecoration = "none";
    document.getElementById("text2").style.textDecoration = "underline";
    document.getElementById("text3").style.textDecoration = "none";
    }

    function pro(){
        document.getElementById("image1").style.display = "none";
        document.getElementById("image2").style.display = "none";
        document.getElementById("image3").style.display = "block";
        
        document.getElementById("text1").style.textDecoration = "none";
        document.getElementById("text2").style.textDecoration = "none";
        document.getElementById("text3").style.textDecoration = "underline";
        }

