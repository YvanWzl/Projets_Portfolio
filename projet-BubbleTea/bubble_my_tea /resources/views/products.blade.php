<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos produits</title>
    <link rel="stylesheet" href="css/products.css">
    
</head>
<body>
<header>
    <div class="bandeau">
       <span class="txt"><strong>-10%</strong> POUR VOTRE 1er COMMANDE - LIVRAISON OFFERTE DES <strong>40€</strong> D'ACHATS &nbsp; <strong>-10%</strong> POUR VOTRE 1er COMMANDE - LIVRAISON OFFERTE DES <strong>40€</strong> D'ACHATS &nbsp; <strong>-10%</strong> POUR VOTRE 1er COMMANDE - LIVRAISON OFFERTE DES <strong>40€</strong> D'ACHATS &nbsp; <strong>-10%</strong> POUR VOTRE 1er COMMANDE - LIVRAISON OFFERTE DES <strong>40€</strong> D'ACHATS &nbsp; <strong>-10%</strong> POUR VOTRE 1er COMMANDE - LIVRAISON OFFERTE DES <strong>40€</strong> D'ACHATS &nbsp; <strong>-10%</strong> POUR VOTRE 1er COMMANDE - LIVRAISON OFFERTE DES <strong>40€</strong> D'ACHATS &nbsp;</span> 
      
    </div>
    <div>
        <h1><a href="/">Bubble My Tea</a></h1> 
        <img src="/img/logo.png" alt="logo bubble tea" class="logo">
        <ul class="menu">
            <li><a href="/contact">Contact</a></li>
            <li><a href="/profil">Compte</a></li>
            <li><a href="/panier">Panier</a></li>
        </ul>
    </div>
</header>



<main>
<div class="title">
        <h2>Nos produits</h2>
    </div>

    <div class="row">
        <div class="card container">
            <div class="item">
            <img src="/img/fraise.jpg" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea fraise</div>
                    <form action="{{ route('loginPost') }}" method="POST">
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit1')">+</button>
                    <span id="quantity_produit1" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit1')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>  
                    </form>              
                </div>
            </div>
        </div>
        
        <div class="card container">
            <div class="item">
            <img src="/img/kiwi.jpeg" alt="">
                <div class="content">
                <div class="product_name">Bubble Tea kiwi</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit2')">+</button>
                    <span id="quantity_produit2" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit2')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>                
                </div>
            </div>
        </div>

        <div class="card container">
            <div class="item">
            <img src="/img/chocolat.webp" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea chocolat</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit3')">+</button>
                    <span id="quantity_produit3" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit3')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>                
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card container">
            <div class="item">
            <img src="/img/framboise.webp" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea framboise</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit4')">+</button>
                    <span id="quantity_produit4" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit4')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>                
                </div>
            </div>
        </div>

        <div class="card container">
            <div class="item">
                <img src="/img/peche.webp" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea pêche</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit5')">+</button>
                    <span id="quantity_produit5" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit5')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>                
                </div>
            </div>
        </div>

        <div class="card container">
            <div class="item">
            <img src="/img/passion.webp" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea passion</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit6')">+</button>
                    <span id="quantity_produit6" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit6')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>                
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card container">
            <div class="item">
            <img src="/img/litchi.webp" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea litchi</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit7')">+</button>
                    <span id="quantity_produit7" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit7')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>                
                </div>
            </div>
        </div>

        <div class="card container">
            <div class="item">
            <img src="/img/grenade.webp" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea grenade</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit8')">+</button>
                    <span id="quantity_produit8" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit8')">-</button>
                    <a href="/commande"><button>Sélectionner</button></a>                
                </div>
            </div>
        </div>

        <div class="card container">
            <div class="item">
            <img src="/img/peche.webp" alt="">
                <div class="content">
                    <div class="product_name">Bubble Tea ananas</div>
                    <h3>0.0$</h3>
                    <button class="quantity-button" onclick="updateQuantity('increment', 'produit9')">+</button>
                    <span id="quantity_produit9" class="quantity">1</span>
                    <button class="quantity-button" onclick="updateQuantity('decrement', 'produit9')">-</button>
                    <a href="/commande?quantity_produit1=" + quantity_produit1><button>Sélectionner</button></a>       
                </div>
            </div>
        </div>
    </div>


</main>
<script>
        function updateQuantity(action, productId) {
            var quantityElement = document.getElementById('quantity_' + productId);
            var currentQuantity = parseInt(quantityElement.innerText);

            if (action === 'increment') {
                currentQuantity++;
            } else if (action === 'decrement' && currentQuantity > 1) {
                currentQuantity--;
            }
            quantityElement.innerText = currentQuantity;

            var commandeLink = "/commande?quantity_" + productId + "=" + currentQuantity;
            document.getElementById(productId).href = commandeLink;
        }
    </script>
</body>
</html>