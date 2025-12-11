<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery - Ryan Mark Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .back-btn { display: inline-block; margin-bottom: 20px; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff; text-decoration: none; border-radius: 8px; font-size: 14px; }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .app-card { background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .app-header { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding: 30px; color: #fff; text-align: center; }
        .app-header h1 { font-size: 28px; margin-bottom: 10px; }
        .menu-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; padding: 20px; }
        .menu-item { background: #f8f9fa; border-radius: 10px; padding: 15px; text-align: center; cursor: pointer; transition: transform 0.2s; }
        .menu-item:hover { transform: scale(1.05); }
        .menu-icon { font-size: 40px; margin-bottom: 10px; }
        .menu-name { font-weight: 600; color: #333; margin-bottom: 5px; }
        .menu-price { color: #f5576c; font-weight: bold; }
        .cart { padding: 20px; border-top: 2px solid #eee; }
        .cart-title { font-size: 18px; font-weight: bold; color: #333; margin-bottom: 15px; }
        .cart-item { display: flex; justify-content: space-between; align-items: center; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px; }
        .cart-empty { text-align: center; color: #999; padding: 20px; }
        .cart-total { display: flex; justify-content: space-between; padding: 15px; background: #f093fb; color: #fff; border-radius: 8px; font-size: 18px; font-weight: bold; margin-top: 15px; }
        .btn { width: 100%; padding: 12px; background: #f5576c; color: #fff; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; font-weight: 600; margin-top: 10px; }
        .btn:hover { background: #e04560; }
        .remove-btn { background: #ff4757; color: #fff; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/app-design') }}" class="back-btn">← Back to Portfolio</a>
        
        <div class="app-card">
            <div class="app-header">
                <h1>🍔 Food Delivery</h1>
                <p>Order your favorite meals</p>
            </div>

            <div class="menu-grid">
                <div class="menu-item" onclick="addToCart('Burger', 8.99)">
                    <div class="menu-icon">🍔</div>
                    <div class="menu-name">Burger</div>
                    <div class="menu-price">$8.99</div>
                </div>
                <div class="menu-item" onclick="addToCart('Pizza', 12.99)">
                    <div class="menu-icon">🍕</div>
                    <div class="menu-name">Pizza</div>
                    <div class="menu-price">$12.99</div>
                </div>
                <div class="menu-item" onclick="addToCart('Sushi', 15.99)">
                    <div class="menu-icon">🍣</div>
                    <div class="menu-name">Sushi</div>
                    <div class="menu-price">$15.99</div>
                </div>
                <div class="menu-item" onclick="addToCart('Pasta', 10.99)">
                    <div class="menu-icon">🍝</div>
                    <div class="menu-name">Pasta</div>
                    <div class="menu-price">$10.99</div>
                </div>
                <div class="menu-item" onclick="addToCart('Salad', 7.99)">
                    <div class="menu-icon">🥗</div>
                    <div class="menu-name">Salad</div>
                    <div class="menu-price">$7.99</div>
                </div>
                <div class="menu-item" onclick="addToCart('Tacos', 9.99)">
                    <div class="menu-icon">🌮</div>
                    <div class="menu-name">Tacos</div>
                    <div class="menu-price">$9.99</div>
                </div>
            </div>

            <div class="cart">
                <div class="cart-title">🛒 Your Cart</div>
                <div id="cartItems"></div>
                <div class="cart-total" id="cartTotal" style="display:none;">
                    <span>Total:</span>
                    <span id="totalAmount">$0.00</span>
                </div>
                <button class="btn" id="checkoutBtn" style="display:none;" onclick="checkout()">Checkout</button>
            </div>
        </div>
    </div>

    <script>
        let cart = [];

        function addToCart(name, price) {
            const existing = cart.find(item => item.name === name);
            if (existing) {
                existing.quantity++;
            } else {
                cart.push({ name, price, quantity: 1 });
            }
            renderCart();
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            renderCart();
        }

        function renderCart() {
            const cartItems = document.getElementById('cartItems');
            const cartTotal = document.getElementById('cartTotal');
            const checkoutBtn = document.getElementById('checkoutBtn');
            
            if (cart.length === 0) {
                cartItems.innerHTML = '<div class="cart-empty">Your cart is empty</div>';
                cartTotal.style.display = 'none';
                checkoutBtn.style.display = 'none';
                return;
            }
            
            cartItems.innerHTML = cart.map((item, i) => `
                <div class="cart-item">
                    <div>
                        <strong>${item.name}</strong> x${item.quantity}
                        <div style="color:#666;font-size:13px;">$${(item.price * item.quantity).toFixed(2)}</div>
                    </div>
                    <button class="remove-btn" onclick="removeFromCart(${i})">Remove</button>
                </div>
            `).join('');
            
            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            document.getElementById('totalAmount').textContent = '$' + total.toFixed(2);
            cartTotal.style.display = 'flex';
            checkoutBtn.style.display = 'block';
        }

        function checkout() {
            alert('Order placed successfully! 🎉\nTotal: ' + document.getElementById('totalAmount').textContent);
            cart = [];
            renderCart();
        }

        renderCart();
    </script>
</body>
</html>
