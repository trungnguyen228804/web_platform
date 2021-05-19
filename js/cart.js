var items = [{
        id: 11,
        name: 'Limited - Unique Tumbler for Nurse TB-001',
        desc: 'Tumbler 20oz / All over print / 20oz',
        price: 29.99,
        cost: 37.99,
        img: '0x180@1605261357d0bdfef2e3.png',
        quantity: 2
    },
    {
        id: 12,
        name: 'Limited - Unique Tumbler for Nurse TB-001',
        desc: 'Tumbler 20oz / All over print / 20oz',
        price: 29.99,
        cost: 37.99,
        img: '0x180@1605261357d0bdfef2e3.png',
        quantity: 4
    },
    {
        id: 13,
        name: 'Limited - Unique Tumbler for Nurse TB-001',
        desc: 'Tumbler 20oz / All over print / 20oz',
        price: 29.99,
        cost: 37.99,
        img: '0x180@1605261357d0bdfef2e3.png',
        quantity: 6
    },

]

var discount = 0

// function add(){
// 	items.push({
// 		name: `Back or Smliel ${Math.random().toFixed(3)}`,
// 		quantity:1,
// 		price:Math.random()*10
// 	})

// 	render()
// }


function remove_item(index) {
    items.splice(index, 1)
    render();
}

function updateQuantity(index, quantity) {
    if (quantity < 1) {
        return
    }

    items[index].quantity = quantity
    render()
}

function render() {
    let subTotal = 0;
    items.forEach(item => {
        subTotal += item.quantity * item.price
    })

    discount = subTotal * 0.15.toFixed(2)

    const total = subTotal - discount;

    const html = items.map(item =>
        `<div class="product-cart">
    <div class="product-image">
        <a href="#">
            <img src="./img/0x180@1605261357d0bdfef2e3.png" alt="">
        </a>
    </div>
    <div class="product-cart-details">
        <div class="product-cart-name">
            <a href="#" class="h5">
                ${item.name}
            </a>
        </div>
        <p class="product-cart-options">
            ${item.desc}
        </p>
        <p class="product-cart-price h5"><span>$${item.price.toFixed(2)}</span>
            <span class="product-cart-price-cost">$${item.cost.toFixed(2)}</span></p>
        <div class="product-cart-small-quantity">
            <div class="product-cart-qty">
                <button type="button" class="dec quantity-pro-small button-decrease">-</button>
                <input type="number" name="" min="0" max="Infinity" value="${item.quantity}" class="quantity-number">
                <button type="button" class="inc quantity-pro-small button-increase">+</button>
            </div>
            <div class="remove-product-small">
                <a href="#" class="delete">Remove item</a>
            </div>
        </div>
        <div class="add-more-product">
            + Add more items
        </div>
    </div>
</div>`).join('')

    const html_small = items.map(item =>

        `<div class="product-cart-small">
    <div class="product-cart-img">
        <a href="#">
            <img src="./img/${item.img}" class="img-product-cart-small">
        </a>
    </div>
    <div class="product-cart-details">
        <div class="product-cart-name">
            <a href="#" class="h5">
                ${item.name}
            </a>
        </div>
        <p class="product-cart-options">
            ${item.desc}
        </p>
        <p class="product-cart-price h5"><span>$${item.price.toFixed(2)}</span>
            <span class="product-cart-price-cost">$${item.cost.toFixed(2)}</span></p>
        <div class="product-cart-small-quantity">
            <div class="product-cart-qty">
                <button type="button" class="dec quantity-pro-small button-decrease">-</button>
                <input type="number" name="" min="0" max="Infinity" value="${item.quantity}" class="quantity-number">
                <button type="button" class="inc quantity-pro-small button-increase">+</button>
            </div>
            <div class="remove-product-small">
                <a href="#" class="delete">Remove item</a>
            </div>
        </div>
    </div>
</div>`).join('')

    $('#order-item').length ? document.getElementById('order-item').innerHTML = html : '';
    $('#order-item-small').length ? document.getElementById('order-item-small').innerHTML = html_small : '';
    action_add_more_item()
    const deleteButtons = document.querySelectorAll('.delete')
    const decButtons = document.querySelectorAll('.dec')
    const incButtons = document.querySelectorAll('.inc')
    for (let i = 0; i < deleteButtons.length; i++) {
        var k = i
        incButtons[i].addEventListener("click", () => {
            if (i >= (deleteButtons.length / 2)) {
                k = i - (deleteButtons.length / 2)
            } else {
                k = i
            }
            updateQuantity(k, items[k].quantity + 1)
        })

        decButtons[i].addEventListener("click", () => {
            if (i >= (deleteButtons.length / 2)) {

                k = i - (deleteButtons.length / 2)
            } else {
                k = i
            }
            updateQuantity(k, items[k].quantity - 1)
        })

        deleteButtons[i].addEventListener("click", () => {
            $('.show-establish-remove-item').css("display", "flex");
            document.querySelector('.agree-remove-item').addEventListener("click", () => {
                if (i >= (deleteButtons.length / 2)) {

                    k = i - (deleteButtons.length / 2)
                } else {
                    k = i
                }
                remove_item(k);
                $('.show-establish-remove-item').css("display", "none")

            })
        })
    }

    if ($('.message-fee-shipping').length) {
        width_start_for_free_shipping(total)
    }

    var price_discounts = document.querySelectorAll('.number-discount')
    price_discounts.forEach(item => {
        item.innerText = `$${discount.toFixed(2)}`
    })
    //hidden show discount
    if ($('.message-discount .message-text').length) {
        if (discount > 0) {
            document.querySelector('.message-discount .message-text').innerText = `Congrats! You have received a $${discount.toFixed(2)} discount. Only one discount can be applied so we have chosen the most valuable one for you.`
        } else {
            $('.message-discount .message-text').css('display', 'none')
        }
    }
    document.querySelectorAll('.number-subtotal').forEach(item => {
        item.innerText = `$${total.toFixed(2)}`
    })

    //show icon number product in cart
    if (items.length > 0) {
        var quantity_product = items.length
        if (quantity_product <= 9) {
            quantity_product = '0' + items.length.toString()
        }

        document.querySelector('.cart-number').innerText = quantity_product
        // $('#infor-empty-cart').removeClass('cart-drawer-content--active')
    } else {
        document.querySelector('.cart-number').style.display = 'none'
        // cart_content_active_empty()
        for (var i = 0; i < $('.cart-item-small').length; i++) {
            document.querySelectorAll('.cart-item-small')[i].innerHTML = `
			<div class="message-empty-cart">
			    <div class="icon-close-message"><i class="fas fa-times" onclick="cart_content_active_empty()"></i></div>
			    <div class="cart-empty">
			        <p class="cart-empty-text">
			            There are no items in your cart.
			        </p>
			    </div>
			</div>`
        }

        // $('header .icon-cart').hover(function(){
        // 	$('.header-bottom-row .cart-item-small').addClass('cart-item-small-active')
        // }, function(){
        // 	$('.header-bottom-row .cart-item-small').removeClass('cart-item-small-active')
        // })
        if ($('#content-cart').length) {
            $('#content-cart').remove()
            $('.cart-empty-content').css('display', 'block')
        }
    }
}
// $('#btn-add').addEventListener('click', ()=>{
// 	add()
// })

function cart_content_active_empty() {
    var value = document.querySelector(".header-bottom-row .cart-item-small").classList.value.indexOf("active")
    if (value == -1) {

        document.querySelector(".header-bottom-row .cart-item-small").classList.add('cart-item-small-active')
    } else {
        document.querySelector(".header-bottom-row .cart-item-small").classList.remove('cart-item-small-active')

    }
}

//description start in buy more to enjoy free shipping
function width_start_for_free_shipping(total) {

    var width = 0
    if (total <= 99) {
        width = (total * 100) / 99
        document.querySelector('.message-fee-shipping .message-text-shipping').innerHTML = `Buy <span class="buy-number-money">$${(99-total).toFixed(2)}</span> more to enjoy FREE Shipping`
        document.querySelector('.message-fee-shipping .progress-bar').innerHTML = `<div class="width-bar" style="width: ${width.toFixed(2)}%;"></div>
                            <span class="star-shipping"><i class="fas fa-star"></i></span>`
    } else {
        width = 100
        $('.message-fee-shipping .message-text-shipping').text('Congrats! You are eligible for FREE Shipping')
        $('.message-fee-shipping .progress-bar').length ? document.querySelector('.message-fee-shipping .progress-bar').innerHTML = `<div class="width-bar" style="width: calc(100% - 32px);"></div><i class='fas fa-check-circle'></i>` : ''
    }

}
window.onload = function() {
    render();

}

// action with add_more_item box
function action_add_more_item() {
    //show hidden add_more_items
    const add_more_items = document.querySelectorAll('.add-more-product');
    for (let i = 0; i < add_more_items.length; i++) {
        add_more_items[i].addEventListener("click", function() {
            var scroll_y = '-' + document.documentElement.scrollTop + 'px'
            $('.add-item-small-page').css('display', 'flex')
            $('body').addClass('page-not-scroll')
            $('body').css({ "top": scroll_y })

        })
    }

    //close add_more_items
        document.querySelector(".add-item-small-page .close-add-item-small-page").onclick = function() {
            document.querySelector('.add-item-small-page').style.display = "none";
            $('body').removeClass('page-not-scroll')
        };
}