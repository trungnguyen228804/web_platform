        //event when scroll show the menu
        window.onscroll = function() { myFunction() };

        function myFunction() {
            if (document.body.scrollTop > 128 || document.documentElement.scrollTop > 128) {
                document.querySelector("header .header-bottom").setAttribute("style", "position: fixed; top: 0; z-index: 2; width: 100%;");

            } else {
                document.querySelector("header .header-bottom").setAttribute("style", "position: unset; top: unset; z-index: unset; width: unset;");
            }
        }

        //carousel slider
        if($('.list-product-introduce').length){
        const IMG_WIDTH = 195
        const sliderContainer = document.querySelectorAll('.list-product-introduce .carousel-inner')
        const sliderContainer_content = document.querySelectorAll('.list-product-introduce .carousel-inner')
        const button_carousel = document.querySelectorAll('.list-product-introduce .button-carousel-navigation')

        sliderContainer[0].style.width = "slideImages.length * IMG_WIDTH px"
        var index = [{e:0}, {e:0}, {e:0}, {e:0}]


        function next(i) {
            
            var slideImages = sliderContainer[i].getElementsByClassName('item-carousel')
            if (index[i].e < slideImages.length - 6) {
                index[i].e++
                sliderContainer_content[i].style.transform = 'translate3d(-' + IMG_WIDTH * index[i].e + 'px, 0px, 0px)'
                button_carousel[i].querySelector('.carousel-navigation-button.carousel-navigation-prev').classList.remove('carousel-navigation-disabled')

            } else {
                button_carousel[i].querySelector('.carousel-navigation-button.carousel-navigation-next').classList.add('carousel-navigation-disabled')
            }
            
        }

        function pre(i) {
            
            var slideImages = sliderContainer[i].getElementsByClassName('item-carousel')
            if (index[i].e == 0) {
                button_carousel[i].querySelector('.carousel-navigation-button.carousel-navigation-prev').classList.add('carousel-navigation-disabled')

            } else {

                index[i].e--
                sliderContainer_content[i].style.transform = 'translate3d(-' + IMG_WIDTH * index[i].e + 'px, 0px, 0px)'
                button_carousel[i].querySelector('.carousel-navigation-button.carousel-navigation-next').classList.remove('carousel-navigation-disabled')

            }
        }

        }


        if($('.button-carousel-navigation.zero').length){
            document.querySelector('.button-carousel-navigation.zero .carousel-navigation-button.carousel-navigation-next').addEventListener('click', () => {
                next(0)
            })

            document.querySelector('.button-carousel-navigation.zero .carousel-navigation-button.carousel-navigation-prev').addEventListener('click', () => {
                pre(0)
            })
        }
        if($('.button-carousel-navigation.first').length){
            document.querySelector('.button-carousel-navigation.first .carousel-navigation-button.carousel-navigation-next').addEventListener('click', () => {
                next(1)
            })

            document.querySelector('.button-carousel-navigation.first .carousel-navigation-button.carousel-navigation-prev').addEventListener('click', () => {
                pre(1)
            })
        }

        if($('.button-carousel-navigation.seconde').length){
            document.querySelector('.button-carousel-navigation.seconde .carousel-navigation-button.carousel-navigation-next').addEventListener('click', () => {
            next(2)
            })

            document.querySelector('.button-carousel-navigation.seconde .carousel-navigation-button.carousel-navigation-prev').addEventListener('click', () => {
                pre(2)
            })
        }

        if($('.button-carousel-navigation.thirty').length){
            document.querySelector('.button-carousel-navigation.thirty .carousel-navigation-button.carousel-navigation-next').addEventListener('click', () => {
            next(3)
            })

            document.querySelector('.button-carousel-navigation.thirty .carousel-navigation-button.carousel-navigation-prev').addEventListener('click', () => {
                pre(3)
            })
        }
        

        // setInterval(()=>{
        //     next(2)
        // }, 4*1000)

        //show hidden cart drawer content
        function cart_content_active() {
            var value = document.querySelector(".header-bottom-row .cart-item-small").classList.value.indexOf("active")
            if (value == -1) {
                document.querySelector(".header-bottom-row .cart-item-small").classList.add('cart-item-small-active')
                hidden_box_when_click_outsite('cart_small')
            } else {
                document.querySelector(".header-bottom-row .cart-item-small").classList.remove('cart-item-small-active')

            }
        }

        function close_cart_item() {
            document.getElementsByClassName('show-establish-remove-item')[0].style.display = "none";
        }

        //carousel slider add more items

        const IMG_WIDTH_ITEM = 81.5
        const slider_add_items_Container = document.querySelector('.add-item-small-page .carousel-inner-small')
        const slideImages_add_items = slider_add_items_Container.getElementsByClassName('item-carousel-small')

        slider_add_items_Container.style.width = "slideImages_add_items.length * IMG_WIDTH_ITEM px"
        let index_add_item = 0

        function next_add_items() {
            if (index_add_item < slideImages_add_items.length - 4) {
                index_add_item += 4

            } else {
                index_add_item = 0

            }
            slider_add_items_Container.style.transform = 'translate3d(-' + IMG_WIDTH_ITEM * index_add_item + 'px, 0px, 0px)'
        }

        function pre_add_items() {
            if (index_add_item == 0) {
                index_add_item = slideImages_add_items.length - 4

            } else {
                index_add_item -= 4
                slider_add_items_Container.style.transform = 'translate3d(-' + IMG_WIDTH_ITEM * index_add_item + 'px, 0px, 0px)'

            }
        }

        document.querySelector('.add-item-small-page .button-carousel-navigation .carousel-navigation-next').addEventListener('click', () => {
            next_add_items()
        })

        document.querySelector('.add-item-small-page .button-carousel-navigation .carousel-navigation-prev').addEventListener('click', () => {
            pre_add_items()
        })


        // menu mobile
        document.addEventListener("DOMContentLoaded", function() {
            var nut = document.querySelector('div.icon i');
            var mobile = document.querySelector('ul');
            nut.addEventListener('click', function() {
                mobile.classList.toggle('active');
            })
        })

        //chose type money footer
        $('span.button-chose-money').click(function() {
            $('.list-local-money').css('display', 'block')
            hidden_box_when_click_outsite()

        })

        // Hide box on click outside
        function hidden_box_when_click_outsite(type){

        var _flag = 0
    document.addEventListener("click", function(evt) {
        
    var flyoutElement = type=='cart_small'?document.querySelector(".cart-item-small"):document.querySelector(".list-local-money"),
        targetElement = evt.target;  // clicked element

    do {
        if (targetElement == flyoutElement) {
            // This is a click inside. Do nothing, just return.
            return;
        }
        // Go up the DOM
        targetElement = targetElement.parentNode;
    } while (targetElement);
     if(_flag!=1){
            _flag==0?_flag=1:_flag=2
            return
        } 
        _flag=2
    // This is a click outside.
    type=='cart_small'?flyoutElement.classList.remove('cart-item-small-active'):flyoutElement.style.display='none'
    
});
}

