function toggle(showHideDiv, switchImgTag) {
        var ele = document.getElementById(showHideDiv);
        var imageEle = document.getElementById(switchImgTag);
        if(ele.style.display == "block") {
                ele.style.display = "none";
                imageEle.innerHTML = '<i class="fa fa-plus-circle" aria-hidden="true"></i>';
        }
        else {
                ele.style.display = "block";
                imageEle.innerHTML = '<i class="fa fa-minus-circle" aria-hidden="true"></i>';
        }
}

function toggleAll(showHideDiv, switchImgTag) {
        var ele = document.getElementById(showHideDiv);
        var imageEle = document.getElementById(switchImgTag);
        if (ele.style.display == "none"){
                ele.style.display = "block";
                imageEle.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        }

        else{
                ele.style.display = "none";
                imageEle.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        }
}
