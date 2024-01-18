<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/panier.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="heading">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
            </svg> Shopping Cart
        </h1>
        <div class="item-flex">
            <section class="checkout">
                <h2 class="section-heading">Payment Details</h2>
                <div class="payment-form">
                    <div class="payment-method">
                        <div class="payment-card-option">
                            <button class="method selected">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                    <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"/>
                                </svg>
                                <span>Credit Card</span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </button>
                            <button class="method selected">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                    <path d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"/>
                                </svg>
                                <span>Paypal</span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="payment-card-info">
                            <form  action="#">
                                <div class="cardholder-name">
                                    <label for="cardholder" class="label-default">Cardholder name</label>
                                    <input type="text" id="cardholder_name" name="cardholder_name" class="input-default">
                                </div>
                                
                                <div class="card-number">
                                    <label for="card-number" class="label-default">Card Number</label>
                                    <input type="number" id="card-number" name="card-number" class="input-default">
                                </div>
            
                                <div class="expire-date">
                                    <label for="expire-date" class="label-default">Expiration date</label>
                                    <input class="expire-date-input" type="number" name="day" id="expire-date" placeholder="31" min="1" max="31" class="input-default">
                                    /
                                    <input class="expire-date-input" type="number" name="month" id="expire-date" placeholder="12" min="1" max="12" class="input-default">
                                </div>
        
                                <div class="cvv">
                                    <label for="cvv" class="label-default">CVV</label>
                                    <input type="number" id="cvv" name="cvv" class="input-default">
                                </div>
                                <button class="btn btn-primary">
                                    <b>Pay</b> $ <span id="payAmount">0.00</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </section>

                <section class="cart">
                    <div class="class-cart-item-box">
                        <h2 class="section-heading">Order Summary</h2>

                        <div class="product-card">
                            <div class="card">
                                <div class="img-box">
                                    <img src="./Images/JwezQBwrzbiZhxhxJwwrwrQBQBOqQB.jpg" alt="" width="80px" class="product-img">
                                </div>

                                <div class="detail"> 
                                    <h4 class="product-name">BubbleTea Fraise</h4>

                                    <div class="wrapper">
                                        <div class="product-qty">
                                            <button id="decrement">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                    <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/>
                                                </svg>
                                            </button>
                                            
                                            <span id="quantity">1</span>

                                            <button id="increment">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="price">
                                            $ <span id="price">0.00</span>
                                        </div>
                                    </div>
                                </div>

                                <button id="product-close-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                                    </svg>
                                </button>
                        </div>
                    </div>
                </div>

                <div class="wrapper">

                    <div class="discount-token">

                        <label for="discount-token" class="label-default"></label>
                        <div class="wrapper-flex">

                            <input type="text" name="discount-token" id="discount-token" class="text input-default">

                            <button class="btn btn-outline">Apply</button>
                        </div>
                    </div>

                    <div class="amount">
                        <div class="subtotal">
                            <span>Subtotal</span><span id="subtotal">0.00</span>
                        </div>

                        <div class="tax">
                            <span>Tax</span><span id="tax">0.00</span>
                        </div>

                        <div class="shipping">
                            <span>Shipping</span><span id="shipping">0.00</span>
                        </div>

                        <div class="total">
                            <span>Total</span><span id="total">0.00</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
