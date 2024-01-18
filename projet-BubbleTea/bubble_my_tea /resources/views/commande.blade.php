<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander</title>
    <link rel="stylesheet" href="css/commande.css">
    
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
    
    <img src="/img/fraise.jpg" alt="bubbleTea">
    <form id="bubbleTeaForm">
      <h2 class="title">Bubble Tea Fraise</h2> 

     

      <h3 id="variable"></h3>
      
        <label for="poppings">Choisissez vos perles</label>
        <select id="poppings" name="poppings">
          <option value="pearls">Tapioca</option>
          <option value="jelly">Jelly</option>
          <option value="poppingBoba">Popping Boba</option>
          <option value="Pêche">Pêche</option>
          <option value="Mangue">Mangue</option>
          <option value="Cerise">Cerise</option>
          <option value="Fraise">Fraise</option>
          <option value="Pomme">Pomme</option>
          <option value="Pasteque">Pasteque</option>
        </select>
    
        <label for="sugarLevel">Quantité de sucre pour 100ml</label>
        <input type="range" id="sugarLevel" name="sugarLevel" min="0" max="100" step="10" value="50">
        <span id="sugarValue">50%</span>
    
        <label for="quantity">Quantité:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1">
        <a href="/"><button type="button" onclick="addToCart()">Ajouter au panier</button></a>
      </form>
      
      <script>
        function addToCart() {
          const poppings = document.getElementById('poppings').value;
          const sugarLevel = document.getElementById('sugarLevel').value;
          const quantity = document.getElementById('quantity').value;
    
          const itemText = `${quantity} avec ${poppings}, ${sugarLevel}% de sucre`;
          const listItem = document.createElement('li');
          listItem.appendChild(document.createTextNode(itemText));
    
          document.getElementById('cart').appendChild(listItem);
        }
    
        document.getElementById('sugarLevel').addEventListener('input', function() {
          document.getElementById('sugarValue').textContent = this.value + '%';
        });
      </script>

<script>
    var price = 9.99 * getQueryParam();
    var resultat = document.getElementById("variable"); // target id
    resultat.innerHTML = price;
</script>
<script>
        // Fonction pour extraire les paramètres de requête de l'URL
        function getQueryParam(name) {
            const urlSearchParams = new URLSearchParams(window.location.search);
            return urlSearchParams.get(name);
        }

        // Exemple d'utilisation pour récupérer la quantité du produit 1
        const quantityProduit1 = getQueryParam('quantity_produit1');
        if (quantityProduit1 !== null) {
            console.log('Quantité du produit 1 sélectionnée :', quantityProduit1);
            // Vous pouvez utiliser la quantité comme bon vous semble sur cette page
        }
    </script>


</main>
</body>

</body>
</html>