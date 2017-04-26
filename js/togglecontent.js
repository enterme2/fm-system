function toggle(showHideDiv, switchIcon) {
        var ele = document.getElementById(showHideDiv);
        var iconEle = document.getElementById(switchIcon);
        if(ele.style.display == "block") {
                ele.style.display = "none";
                iconEle.innerHTML = '<i class="fa fa-plus-circle" aria-hidden="true"></i>';
        }
        else {
                ele.style.display = "block";
                iconEle.innerHTML = '<i class="fa fa-minus-circle" aria-hidden="true"></i>';
        }
        
}


function toggleAll(showHideDiv,showHideDiv2,showHideDiv3,showHideDiv4,showHideDiv5, switchEyeIcon, switchIconA, switchIconB, switchIconC, switchIconD, switchIconE) {
        var ele=[];
         ele[0] = document.getElementById(showHideDiv);
         ele[1] = document.getElementById(showHideDiv2);
         ele[2] = document.getElementById(showHideDiv3);
         ele[3] = document.getElementById(showHideDiv4);
         ele[4] = document.getElementById(showHideDiv5);

        var iconEle = document.getElementById(switchEyeIcon);

        var iconPlus=[];
        iconPlus[0]=document.getElementById(switchIconA);
        iconPlus[1]=document.getElementById(switchIconB);
        iconPlus[2]=document.getElementById(switchIconC);
        iconPlus[3]=document.getElementById(switchIconD);
        iconPlus[4]=document.getElementById(switchIconE);

       if (ele[0].style.display == "block" && ele[1].style.display == "none" && ele[2].style.display == "none" && ele[3].style.display == "none" && ele[4].style.display == "none" ){
                
                for (var i = 0; i <ele.length ; i++) {
                   ele[i].style.display = "block";
                   iconPlus[i].innerHTML = '<i class="fa fa-minus-circle" aria-hidden="true"></i>';
                }

                iconEle.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        }


        else if (ele[0].style.display == "block" && ele[1].style.display == "block" && ele[2].style.display == "block" && ele[3].style.display == "block" && ele[4].style.display == "block") 
        {
                for (var i = 0; i <ele.length ; i++) {
                   ele[i].style.display = "none";
                   iconPlus[i].innerHTML = '<i class="fa fa-plus-circle" aria-hidden="true"></i>';
                }

                iconEle.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        }

       else {
                
                for (var i = 0; i <ele.length ; i++) {
                   ele[i].style.display = "block";
                   iconPlus[i].innerHTML = '<i class="fa fa-minus-circle" aria-hidden="true"></i>';
                }

                iconEle.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        }
}
