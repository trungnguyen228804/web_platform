// const $ = document.querySelector.bind(document);
// const $$ = document.querySelectorAll.bind(document);

// element.classList.contains(className);

function tabClick(tabBtn, tabContent) {
    // document.querySelectorAll('.tablet-tab-btn-item').forEach((item, index) => {
    //  item.onclick= function(){
    //      // console.log(this);
    //      // item.classList.remove('active');
    //      document.querySelectorAll('.tablet-tab-btn-item').forEach(item1=> item1.classList.remove('active'));
    //      document.querySelectorAll('.tablet-tab-item').forEach(item1=> item1.classList.remove('active'));

    //      this.classList.add('active');
    //      document.querySelectorAll('.tablet-tab-item')[index].classList.add('active');
    //      // console.log(index);
    //  }
    // });
    document.querySelectorAll(tabBtn).forEach((item, index) => {
        item.onclick = function() {
            // console.log(this);
            // item.classList.remove('active');
            document.querySelectorAll(tabBtn).forEach(item1 => item1.classList.remove('active'));
            document.querySelectorAll(tabContent).forEach(item1 => item1.classList.remove('active'));

            this.classList.add('active');
            document.querySelectorAll(tabContent)[index].classList.add('active');
            // console.log(index);
        }
    });
}

function tabClickPhone(tabBtn, tabContent) {
    document.querySelectorAll(tabBtn).forEach((item, index) => {
        item.onclick = function() {
            this.classList.toggle('active');
            document.querySelectorAll(tabContent)[index].classList.toggle('active');
        }
    });
}

tabClick('.tablet-tab-btn-item', '.tablet-tab-item');
tabClickPhone('.phone-tab-item', '.phone-tab-item-content');

function showFormWrite() {
    document.querySelector('.review-write-btn').onclick = function() {
        document.querySelector('.detail-form-write-wrapper').style.display = 'block';
        this.style.display = 'none';
    }

    document.querySelector('.form-write-title-close').onclick = function() {
        document.querySelector('.detail-form-write-wrapper').style.display = 'none';
        document.querySelector('.review-write-btn').style.display = 'flex';
    }
}

showFormWrite();



function show_time_rest() {
    var now = new Date();
    var rest = 23 - now.getHours() + ':' + (59 - now.getMinutes()) + ':' + (60 - now.getSeconds());
    document.querySelector('.detail-time-digit').innerHTML = rest;
    // show_time_rest_for();
}
// show_time_rest();
// show_time_rest_for();
setInterval(show_time_rest, 1000);

function changeCartQuanlity() {
    var textCartQuanlity = parseInt(document.querySelector('.textCartQuanlity').value);
    document.querySelectorAll('.btnCartUp').forEach((item, index) => {
        item.onclick = function() {
            // console.log(document.querySelector('.textCartQuanlity').value);
            textCartQuanlity++;
            document.querySelectorAll('.textCartQuanlity').forEach((item1, index1) => {
                // console.log(parseInt(document.querySelector('.textCartQuanlity').value) + 1);
                item1.value = textCartQuanlity;
            })
        }
    });
    document.querySelectorAll('.btnCartDown').forEach((item, index) => {
        item.onclick = function() {
            // console.log(document.querySelector('.textCartQuanlity').value);
            if (textCartQuanlity > 1) {
                textCartQuanlity--;
                document.querySelectorAll('.textCartQuanlity').forEach((item1, index1) => {
                    // console.log(parseInt(document.querySelector('.textCartQuanlity').value) + 1);
                    item1.value = textCartQuanlity;
                })
            }
        }
    });
}
changeCartQuanlity();



var slider_image_index = 0;
var slider_thumb_screen_index = 0;
var slider_image_dot_width = 20;

var slider_image_out_width = document.querySelector('#s1 .product-image-out').offsetWidth;
var slider_image_length = document.querySelectorAll('#s1 .product-image-item').length;

var slider_thumb_out_width = document.querySelector('#s1 .product-thumb-out').offsetWidth;
var slider_thumb_screen_length = Math.ceil(slider_image_length / 5);
var slider_thumb_item_width = document.querySelector('#s1 .product-thumb-item').offsetWidth;

function imageOwl() {


    // console.log(slider_thumb_out_width);

    document.querySelector('#s1 .detail-next').onclick = function() {
        // alert(22);
        // console.log(slider_image_index);
        if (slider_image_index < slider_image_length - 1) {
            slider_image_index++;
            document.querySelector('#s1 .product-image-list').style.transform = 'translate(-' + slider_image_index * slider_image_out_width + 'px , 0px)';
            document.querySelectorAll('#s1 .product-thumb-item').forEach(item => item.classList.remove('i-active'));
            document.querySelectorAll('#s1 .product-thumb-item')[slider_image_index].classList.add('i-active');
            document.querySelectorAll('#s1 .product-image-dot-item').forEach(item => item.classList.remove('i-active'));
            console.log(document.querySelectorAll('#s1 .product-image-dot-item'))
            document.querySelectorAll('#s1 .product-image-dot-item')[slider_image_index].classList.add('i-active');
            if (slider_image_length > 9) {
                let slider_image_dot_x;
                if (slider_image_index <= 4) {
                    slider_image_dot_x = 0;
                } else if (slider_image_index > 4 && slider_image_index < (slider_image_length - 1 - 4)) {
                    slider_image_dot_x = (slider_image_index - 4) * (slider_image_dot_width);
                } else if (slider_image_index > (slider_image_length - 5)) {
                    slider_image_dot_x = (slider_image_length - 9) * (slider_image_dot_width);
                }
                document.querySelector('#s1 .product-image-dot-list').style.transform = 'translate(-' + slider_image_dot_x + 'px , 0px)';
            }
        }
    }

    document.querySelector('#s1 .detail-prev').onclick = function() {
        // alert(22);
        console.log(slider_image_index);
        if (slider_image_index > 0) {
            slider_image_index--;
            document.querySelector('#s1 .product-image-list').style.transform = 'translate(-' + slider_image_index * slider_image_out_width + 'px , 0px)';
            document.querySelectorAll('#s1 .product-thumb-item').forEach(item => item.classList.remove('i-active'));
            document.querySelectorAll('#s1 .product-thumb-item')[slider_image_index].classList.add('i-active');

            document.querySelectorAll('#s1 .product-image-dot-item').forEach(item => item.classList.remove('i-active'));
            document.querySelectorAll('#s1 .product-image-dot-item')[slider_image_index].classList.add('i-active');
            if (slider_image_length > 9) {
                let slider_image_dot_x;
                if (slider_image_index <= 4) {
                    slider_image_dot_x = 0;
                } else if (slider_image_index > 4 && slider_image_index < (slider_image_length - 1 - 4)) {
                    slider_image_dot_x = (slider_image_index - 4) * (slider_image_dot_width);
                } else if (slider_image_index > (slider_image_length - 5)) {
                    slider_image_dot_x = (slider_image_length - 9) * (slider_image_dot_width);
                }
                document.querySelector('#s1 .product-image-dot-list').style.transform = 'translate(-' + slider_image_dot_x + 'px , 0px)';
            }
        }
    }


    document.querySelector('#s1 .thumb-next').onclick = function() {
        if (slider_thumb_screen_index < slider_thumb_screen_length - 1 - 1) {
            slider_thumb_screen_index++;
            document.querySelector('.product-thumb-list').style.transform = 'translate(-' + slider_thumb_screen_index * slider_thumb_out_width + 'px , 0px)';
        } else if (slider_thumb_screen_index < slider_thumb_screen_length - 1) {
            slider_thumb_screen_index++;
            if (slider_image_length > 5) {
                let slider_thumb_x_last = slider_thumb_item_width * (slider_image_length - 5);
                document.querySelector('.product-thumb-list').style.transform = 'translate(-' + slider_thumb_x_last + 'px , 0px)';
            }
        }
    }

    document.querySelector('#s1 .thumb-prev').onclick = function() {
        // alert(22);
        if (slider_thumb_screen_index > 0) {
            slider_thumb_screen_index--;
            document.querySelector('#s1 .product-thumb-list').style.transform = 'translate(-' + slider_thumb_screen_index * slider_thumb_out_width + 'px , 0px)';
        }
    }

    document.querySelectorAll('#s1 .product-thumb-item').forEach((item, index) => {
        item.onclick = function() {
            slider_image_index = index;
            document.querySelector('#s1 .product-image-list').style.transform = 'translate(-' + slider_image_index * slider_image_out_width + 'px , 0px)';
            document.querySelectorAll('#s1 .product-thumb-item').forEach(item => item.classList.remove('i-active'));
            document.querySelectorAll('#s1 .product-thumb-item')[slider_image_index].classList.add('i-active');
            document.querySelectorAll('#s1 .product-image-dot-item').forEach(item => item.classList.remove('i-active'));
            document.querySelectorAll('#s1 .product-image-dot-item')[slider_image_index].classList.add('i-active');
            if (slider_image_length > 9) {
                let slider_image_dot_x;
                if (slider_image_index <= 4) {
                    slider_image_dot_x = 0;
                } else if (slider_image_index > 4 && slider_image_index < (slider_image_length - 1 - 4)) {
                    slider_image_dot_x = (slider_image_index - 4) * (slider_image_dot_width);
                } else if (slider_image_index > (slider_image_length - 5)) {
                    slider_image_dot_x = (slider_image_length - 9) * (slider_image_dot_width);
                }
                document.querySelector('#s1 .product-image-dot-list').style.transform = 'translate(-' + slider_image_dot_x + 'px , 0px)';
            }
        }
    })

    document.querySelectorAll('#s1 .product-image-dot-item').forEach((item, index) => {
        item.onclick = function() {
            slider_image_index = index;
            document.querySelector('#s1 .product-image-list').style.transform = 'translate(-' + slider_image_index * slider_image_out_width + 'px , 0px)';
            document.querySelectorAll('#s1 .product-thumb-item').forEach(item => item.classList.remove('i-active'));
            document.querySelectorAll('#s1 .product-thumb-item')[slider_image_index].classList.add('i-active');
            document.querySelectorAll('#s1 .product-image-dot-item').forEach(item => item.classList.remove('i-active'));
            document.querySelectorAll('#s1 .product-image-dot-item')[slider_image_index].classList.add('i-active');
            // console.log(slider_image_index);
            if (slider_image_length > 9) {
                let slider_image_dot_x;
                if (slider_image_index <= 4) {
                    slider_image_dot_x = 0;
                } else if (slider_image_index > 4 && slider_image_index < (slider_image_length - 1 - 4)) {
                    slider_image_dot_x = (slider_image_index - 4) * (slider_image_dot_width);
                } else if (slider_image_index > (slider_image_length - 5)) {
                    slider_image_dot_x = (slider_image_length - 9) * (slider_image_dot_width);
                }
                document.querySelector('#s1 .product-image-dot-list').style.transform = 'translate(-' + slider_image_dot_x + 'px , 0px)';
            }
        }
    })



}

imageOwl();

function filterReview() {
    document.querySelector('#checkbox_box_item').onchange = function() {
        // alert(22);
        // console.log(document.querySelector('.detail-review-box-item').getAttribute('data-image'));
        if (document.querySelector('#checkbox_box_item').checked == true) {
            // console.log(document.querySelector('.detail-review-box-item').getAttribute('data-image'));
            document.querySelectorAll('.detail-review-box-item').forEach((item, index) => {
                // console.log(item.getAttribute('data-image'));
                if (item.hasAttribute('data-image') == false) {
                    item.style.display = 'none';
                }
            })
        } else {
            document.querySelectorAll('.detail-review-box-item').forEach((item, index) => {
                // console.log(item.getAttribute('data-image'));
                item.style.display = 'block';
            })
        }
    }
}

// filterReview();

function tabFilter() {
    document.querySelectorAll('.review-type-btn').forEach((item, index) => {
        item.onclick = function() {
            document.querySelectorAll('.review-type-btn').forEach(item1 => item1.classList.remove('i-active'));
            this.classList.add('i-active');

            if (this.getAttribute('data-type') == 'product') {
                document.querySelectorAll('.detail-review-box-item').forEach(item1 => {
                    if (item1.hasAttribute('data-type') == false || item1.getAttribute('data-type' != 'product')) {
                        item1.style.display = 'none';
                    } else {
                        item1.style.display = 'block';
                    }
                })
            } else {
                document.querySelectorAll('.detail-review-box-item').forEach(item1 => item1.style.display = 'block');
            }
        }
    })
}
tabFilter();

//fill: #dadada; #EAB470;
function hoverFormeReviewStar() {
    document.querySelectorAll('.reviewStarList>span').forEach((item, index) => {
        item.onmouseover = function() {
            document.querySelector('.reviewStarList').setAttribute('data-rating', index + 1);
            document.querySelectorAll('.reviewStarList>span svg').forEach((item1, index1) => {
                if (index1 > index) {
                    item1.style.fill = '#dadada';
                } else {
                    item1.style.fill = '#EAB470';
                }
            })
            // Awful#e85244 Bad Normal#d47e44 Good#428cf0 Wonderful#20a848
            //change review star text
            switch (index) {
                case 0:
                    document.querySelector('.reviewStarText').textContent = 'Awful';
                    document.querySelector('.reviewStarText').style.color = '#e85244';
                    document.querySelector('.form-write-star-note').style.display = 'block';
                    break;
                case 1:
                    document.querySelector('.reviewStarText').textContent = 'Bad';
                    document.querySelector('.reviewStarText').style.color = '#e85244';
                    document.querySelector('.form-write-star-note').style.display = 'block';
                    break;
                case 2:
                    document.querySelector('.reviewStarText').textContent = 'Normal';
                    document.querySelector('.reviewStarText').style.color = '#d47e44';
                    document.querySelector('.form-write-star-note').style.display = 'block';
                    break;
                case 3:
                    document.querySelector('.reviewStarText').textContent = 'Good';
                    document.querySelector('.reviewStarText').style.color = '#428cf0';
                    document.querySelector('.form-write-star-note').style.display = 'none';
                    break;
                case 4:
                    document.querySelector('.reviewStarText').textContent = 'Wonderful';
                    document.querySelector('.reviewStarText').style.color = '#20a848';
                    document.querySelector('.form-write-star-note').style.display = 'none';
                    break;
                default:
                    document.querySelector('.reviewStarText').textContent = 'Wonderful';
                    document.querySelector('.reviewStarText').style.color = '#20a848';
                    break;
            }
        }
    })
}
hoverFormeReviewStar();

function changeFormWriteInput() {
    document.querySelector('.formWriteItem input').oninput = function() {
        // console.log(this.value.length);
        // console.log(this.parentElement.querySelector('div span'));
        this.parentElement.querySelector('div span').textContent = this.value.length;
    }
}
changeFormWriteInput();

function changeFormWriteTextarea() {
    document.querySelector('.formWriteItem textarea').oninput = function() {
        // console.log(this.value.length);
        // console.log(this.parentElement.querySelector('div span'));
        this.parentElement.querySelector('div span').textContent = this.value.length;
    }
}
changeFormWriteTextarea();

function formWriteTeaxtareAddTag() {
    document.querySelectorAll('#ss-detail .form-write-tag-item').forEach((item, index) => {
        item.onclick = function() {
            document.querySelector('.formWriteItem textarea').value = document.querySelector('.formWriteItem textarea').value + this.textContent; + ', ';
        }
    })
}
formWriteTeaxtareAddTag();

function formWriteImageAdd() {
    var imageAddFile = [];
    // document.querySelectorAll('.form-write-image-item span').forEach((item, index) => {
    //     item.onclick= function(){
    //         document.querySelector('#ss-detail .form-write-image-add input').files[index].remove;
    //         imageAddFile= document.querySelector('#ss-detail .form-write-image-add input').files;
    //         document.querySelectorAll('.form-write-image-item')[index].style.display= 'none';
    //         document.querySelectorAll('.form-write-image-item img').src= '';
    //     }
    // })
    document.querySelector('#ss-detail .form-write-image-add input').onchange = function() {
        // if(this.files){
        if (this.files.length == 0) {
            this.files = imageAddFile;
        }
        // if(imageAddFile.length!=0){
        //     this.files= imageAddFile.concat(this.files);                
        // }
        // console.log(this.files);
        // if(this.files.length >= 5){
        //     for(let j=5; j<this.files.length; j++){
        //         this.files[j].remove;
        //     }
        // }
        document.querySelectorAll('.form-write-image-item').forEach(item => {
            item.style.display = 'none';
            item.querySelector('img').setAttribute('src', '');
        });
        for (let i = 0; i < this.files.length; i++) {

            document.querySelectorAll('.form-write-image-item')[i].style.display = 'flex';
            let reader = new FileReader();
            reader.readAsDataURL(this.files[i]);
            reader.onload = function(e) {
                document.querySelectorAll('#ss-detail .form-write-image-item img')[i].setAttribute('src', e.target.result);
            }
        }
        if (this.files.length >= 5) {
            // document.querySelector('.form-write-image-add').style.display= 'none';
        } else {
            // document.querySelector('.form-write-image-add').style.display= 'block';
        }
        imageAddFile = this.files;
        // }
    }
}
formWriteImageAdd()


function productOwl() {
    if (window.innerWidth > 1200) {
        var p_count_one_screen = 6;
    } else {
        var p_count_one_screen = 4;
    }

    var p_item_count = document.querySelectorAll('#p1 .product-owl-item').length;
    if (p_item_count >= p_count_one_screen) {
        var p_screen_width = document.querySelector('#p1 .product-owl-list').offsetWidth;
        var p_item_width = document.querySelector('#p1 .product-owl-item').offsetWidth;
        var p_index = 0;
        var p_index_max = p_item_count - p_count_one_screen;
        console.log(p_item_count);
        document.querySelector('.product-owl-next').onclick = function() {
            if (p_index < p_index_max) {
                p_index++;
                document.querySelector('.product-owl-list').style.transform = 'translate(' + (-p_index * p_item_width) + 'px, 0)';
                if (p_index >= p_index_max) {
                    document.querySelector('.product-owl-next').style.display = 'none';
                }
                if (p_index > 0) {
                    document.querySelector('.product-owl-prev').style.display = 'block';
                }
            }
        }

        document.querySelector('.product-owl-prev').onclick = function() {
            if (p_index > 0) {
                p_index--;
                document.querySelector('.product-owl-list').style.transform = 'translate(' + (-p_index * p_item_width) + 'px, 10px)';
                if (p_index == 0) {
                    document.querySelector('.product-owl-prev').style.display = 'none';
                }
                if (p_index < p_index_max) {
                    document.querySelector('.product-owl-next').style.display = 'block';
                }
            }
        }
    }

}
// productOwl();
var p_count_one_screen = [];
var p_item_count = [];
var p_screen_width = [];
var p_item_width = [];
var p_index = [];
var p_index_max = [];

function productOwl(ids) {

    ids.forEach((id, id_index) => {

        if (window.innerWidth > 1200) {
            p_count_one_screen[id_index] = 6;
        } else {
            p_count_one_screen[id_index] = 4;
        }

        p_item_count[id_index] = document.querySelectorAll(id + '.product-owl-item').length;
        if (p_item_count[id_index] >= p_count_one_screen[id_index]) {
            p_screen_width[id_index] = document.querySelector(id + '.product-owl-list').offsetWidth;
            p_item_width[id_index] = document.querySelector(id + '.product-owl-item').offsetWidth;
            p_index[id_index] = 0;
            p_index_max[id_index] = p_item_count[id_index] - p_count_one_screen[id_index];
            // console.log(p_item_count);
            document.querySelector(id + '.product-owl-next').onclick = function() {
                if (p_index[id_index] < p_index_max[id_index]) {
                    p_index[id_index]++;
                    document.querySelector(id + '.product-owl-list').style.transform = 'translate(' + (-p_index[id_index] * p_item_width[id_index]) + 'px, 0)';
                    if (p_index[id_index] >= p_index_max[id_index]) {
                        document.querySelector(id + '.product-owl-next').style.display = 'none';
                    }
                    if (p_index[id_index] > 0) {
                        document.querySelector(id + '.product-owl-prev').style.display = 'block';
                    }
                }
            }

            document.querySelector(id + '.product-owl-prev').onclick = function() {
                if (p_index[id_index] > 0) {
                    p_index[id_index]--;
                    document.querySelector(id + '.product-owl-list').style.transform = 'translate(' + (-p_index[id_index] * p_item_width[id_index]) + 'px, 10px)';
                    if (p_index[id_index] == 0) {
                        document.querySelector(id + '.product-owl-prev').style.display = 'none';
                    }
                    if (p_index[id_index] < p_index_max[id_index]) {
                        document.querySelector(id + '.product-owl-next').style.display = 'block';
                    }
                }
            }
        }
    });

}
productOwl(['#p1 ', '#p2 ', '#p3 ']);

function productOwlResize(ids) {

    ids.forEach((id, id_index) => {

        if (window.innerWidth > 1200) {
            p_count_one_screen[id_index] = 6;
        } else {
            p_count_one_screen[id_index] = 4;
        }

        p_item_count[id_index] = document.querySelectorAll(id + '.product-owl-item').length;
        if (p_item_count[id_index] >= p_count_one_screen[id_index]) {
            p_screen_width[id_index] = document.querySelector(id + '.product-owl-list').offsetWidth;
            p_item_width[id_index] = document.querySelector(id + '.product-owl-item').offsetWidth;
            p_index[id_index] = 0;
            p_index_max[id_index] = p_item_count[id_index] - p_count_one_screen[id_index];
            // console.log(p_item_count);
            document.querySelector(id + '.product-owl-list').style.transform = 'translate(' + (-p_index[id_index] * p_item_width[id_index]) + 'px, 0)';
        }
    });

}

function changeSize() {
    document.querySelectorAll('.detail-bar-box-size .varSize').forEach((item, index) => {
        item.onclick = function() {
            document.querySelectorAll('.detail-bar-box-size .varSize').forEach(item1 => item1.classList.remove('i-active'));
            this.classList.add('i-active');
            document.querySelector('.varSizeText').textContent = this.textContent;
        }
    })

    document.querySelectorAll('.sb-var-menu .varSize').forEach((item, index) => {
        item.onclick = function() {
            document.querySelectorAll('.detail-bar-box-size .varSize').forEach(item1 => item1.classList.remove('i-active'));
            document.querySelector('.varSizeText').textContent = this.textContent;
            document.querySelectorAll('.detail-bar-box-size .varSize')[index].classList.add('i-active');
        }
    })
}
changeSize();


window.onresize = function() {
    if (window.scrollY > document.querySelector('.detail-top').offsetHeight) {
        document.querySelector('.sticky-bar-wrapper').style.display = 'block';
    } else {
        document.querySelector('.sticky-bar-wrapper').style.display = 'none';
    }

    // imageOwl();
    slider_image_out_width = document.querySelector('#s1 .product-image-out').offsetWidth;
    slider_image_length = document.querySelectorAll('#s1 .product-image-item').length;

    slider_thumb_out_width = document.querySelector('#s1 .product-thumb-out').offsetWidth;
    slider_thumb_screen_length = Math.ceil(slider_image_length / 5);
    slider_thumb_item_width = document.querySelector('#s1 .product-thumb-item').offsetWidth;

    document.querySelector('#s1 .product-image-list').style.transform = 'translate(-' + slider_image_index * slider_image_out_width + 'px , 0px)';

    // productOwl(['#p1 ', '#p2 ', '#p3 ']);
    // productOwlResize(['#p1 ', '#p2 ', '#p3 ']);
}

window.onscroll = function() {
    if (window.scrollY > document.querySelector('.detail-top').offsetHeight) {
        document.querySelector('.sticky-bar-wrapper').style.display = 'block';
    } else {
        document.querySelector('.sticky-bar-wrapper').style.display = 'none';
    }
}

// select option for product

// $(document).ready(function(){
//     var img_style = $(".detail-var-box-image img")
//     for (var i=0; i<img_style.length - 1; i++) {
//             document.querySelectorAll(".detail-var-box-image img")[i].setAttribute("class", "")
//     }

//     for (var i=0; i<img_style.length - 1; i++) {
//         document.querySelectorAll(".detail-var-box-image img")[i].onclick(function(){
//             document.querySelectorAll(".detail-var-box-image img")[i].setAttribute("class", "active")
//         })
//     }

// });