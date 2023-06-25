const product = [
    {
        id: 0,
        image: 'images/lipstick.jpg',
        title: 'Lip Sticks',
        price: 890,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 1,
        image: 'images/eyeshadow.jpg',
        title: 'Eyeshadow',
        price: 3950,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 2,
        image: 'images/concealer.jpg',
        title: 'Concealer',
        price: 1620,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 3,
        image: 'images/foundation.jpg',
        title: 'Foundation',
        price: 1750,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 4,
        image: 'images/eyeliner.jpg',
        title: 'Eye Liner',
        price: 890,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 5,
        image: 'images/lipgloss.jpg',
        title: 'Lip Gloss',
        price: 1250,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 6,
        image: 'images/brushset.jpg',
        title: 'Brush Set',
        price: 2780,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 7,
        image: 'images/highlighters.jpg',
        title: 'Highlighters',
        price: 2250,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
    {
        id: 8,
        image: 'images/faceprimer.jpg',
        title: 'Faceprimer',
        price: 3760,
        description:'Browse through our collection and find your perfect shade, finish and formulation.',
    },
];
const categories = [...new Set(product.map((item) => { return item }))]
let i = 0;
document.getElementById('root').innerHTML = categories.map((item) => {
    var { image, title, price, description } = item;

    return (
        `<div class="col-lg-12">
        <div class="product-view">
            <div class="product-info">
                <h4 class="product-title">${title}</h4>
                <p class="product-description">${description}</p>
                <img src="${image}" class="image_1">` +
        "<button onclick='addtocart(" + (i++) + ")'>Add to cart</button>" +
        `</div>
            <h3 class="price_text">Price Rs. ${price}.00</h3>
        </div>
    </div>`

    )

}).join('')

var cart = [];

function addtocart(a) {
    cart.push({ ...categories[a] });
    displaycart();
}

function delElement(a) {
    cart.splice(a, 1);
    displaycart();
}

function displaycart(a) {
    let j = 0; total = 0;
    document.getElementById("count").innerHTML = cart.length;

    if (cart.length == 0) {
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "Rs." + 0 + ".00";
    }
    else {
        document.getElementById('cartItem').innerHTML = cart.map((items) => {
            var { image, title, price } = items;
            total = total + price;
            document.getElementById("total").innerHTML = "Rs." + total + ".00";
            return (
                `<div class='cart-item'>
                <div class='row-img'>
                   <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style ='font-size:15px;'>${price}.00</h2>` +
                "<i class='fa-solid fa-trash' onclick='delElement(" + (j++) + ")'></i></div>"
            );
        }).join('');
    }
}