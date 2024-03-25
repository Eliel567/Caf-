<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página do Cardápio</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #603814; /* marrom */
        text-align: center; /* Centraliza o texto horizontalmente */
    }
    h1 {
        color: #000000; /* preto */
        background-color: #ffffff; /* branco */
        border-radius: 20px;
        padding: 10px 20px;
        display: inline-block;
        width: auto;
        margin: 0 auto; /* Centraliza o elemento horizontalmente */
    }
    .menu {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .menu-item {
        background-color: #ffffff; /* branco */
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 10px;
        padding: 20px;
        width: 400px;
        text-align: center;
    }
    .menu-item img {
        max-width: 100%;
        border-radius: 8px;
    }
    .menu-item h2 {
        color: #000000; /* preto */
    }
    .menu-item p {
        color: #000000; /* preto */
    }
    .price {
        background-color: #000000; /* preto */
        color: #ffffff; /* branco */
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 20px;
        font-weight: bold;
    }
    .edit-price {
        display: none;
    }
    .edit-price input {
        width: 80px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 5px;
    }
    .edit-price button {
        padding: 8px 16px;
        background-color: #1c1c1c; /* caramelo */
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .edit-price button:hover {
        background-color: #303030; /* caramelo mais escuro */
    }
</style>
</head>
<body>
<h1>Cardápio</h1>

<div class="menu">
    <div class="menu-item">
        <img src="/img/cafe-expresso.jpg" alt="Café Espresso" width="400" height="440">
        <h2>Café Espresso</h2>
        <p>Um café expresso feito com grãos selecionados e moídos na hora. Intenso e encorpado, perfeito para começar o dia.</p>
        <div class="price">R$ 15,00 <button class="edit-button" onclick="editPrice(this)">Editar</button></div>
        <div class="edit-price">
            <input type="number" min="0" step="0.01">
            <button onclick="savePrice(this)">Salvar</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="/img/cafe-latte.jpg" alt="Café Latte" width="400" height="440">
        <h2>Café Latte</h2>
        <p>Uma combinação perfeita de café expresso e leite vaporizado, finalizada com uma camada de espuma de leite cremosa.</p>
        <div class="price">R$ 15,00 <button class="edit-button" onclick="editPrice(this)">Editar</button></div>
        <div class="edit-price">
            <input type="number" min="0" step="0.01">
            <button onclick="savePrice(this)">Salvar</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="/img/cafe-cappuccino.png" alt="Café Cappuccino" width="400" height="440">
        <h2>Café Cappuccino</h2>
        <p>Uma deliciosa mistura de café expresso, leite vaporizado e espuma de leite, polvilhada com uma pitada de cacau em pó.</p>
        <div class="price">R$ 15,00 <button class="edit-button" onclick="editPrice(this)">Editar</button></div>
        <div class="edit-price">
            <input type="number" min="0" step="0.01">
            <button onclick="savePrice(this)">Salvar</button>
        </div>
    </div>

    <div class="menu-item">
        <img src="/img/cafe-mocha.jpg" alt="Café Mocha" width="400" height="440">
        <h2>Café Mocha</h2>
        <p>Um café encorpado combinado com chocolate quente cremoso, finalizado com uma camada de chantilly e raspas de chocolate.</p>
        <div class="price">R$ 15,00 <button class="edit-button" onclick="editPrice(this)">Editar</button></div>
        <div class="edit-price">
            <input type="number" min="0" step="0.01">
            <button onclick="savePrice(this)">Salvar</button>
        </div>
    </div>
</div>

<script>
    function editPrice(button) {
        var priceContainer = button.parentNode;
        var editPriceContainer = priceContainer.nextElementSibling;
        priceContainer.style.display = "none";
        editPriceContainer.style.display = "block";
    }

    function savePrice(button) {
        var editPriceContainer = button.parentNode;
        var priceContainer = editPriceContainer.previousElementSibling;
        var priceInput = editPriceContainer.querySelector("input");
        var newPrice = priceInput.value;
        if (!isNaN(newPrice) && newPrice !== "") {
            priceContainer.innerHTML = "R$ " + newPrice + ' <button class="edit-button" onclick="editPrice(this)">Editar</button>';
            editPriceContainer.style.display = "none";
            priceContainer.style.display = "block";
        } else {
            alert("Por favor, insira um preço válido.");
        }
    }
</script>

</body>
</html>
