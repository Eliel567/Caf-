<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Pets</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #603814; /* marrom */
        position: relative; /* Garante que a posição absoluta do logotipo seja relativa ao corpo da página */
    }
    h1 {
        text-align: center;
        color: #ffffff; /* branco */
    }
    form {
        margin-bottom: 20px;
        background-color: #ffffff; /* branco */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 8px;
        color: #000000; /* preto */
    }
    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 15px;
    }
    button[type="submit"] {
        padding: 10px 20px;
        background-color: #1c1c1c; /* caramelo */
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button[type="submit"]:hover {
        background-color: #1c1c1c; /* caramelo mais escuro */
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff; /* branco */
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: left;
        color: #000000; /* preto */
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    button {
        padding: 8px 12px;
        cursor: pointer;
        background-color: #f44336;
        color: white;
        border: none;
        border-radius: 4px;
    }
    button:hover {
        background-color: #d32f2f;
    }
    .animal-img {
        max-width: 100px;
        max-height: 100px;
        border-radius: 50%;
    }
    .logo {
        position: absolute; /* Define a posição absoluta */
        bottom: 600px; /* Define a distância do fundo da página */
        left: 20px; /* Define a distância da borda esquerda da página */
    }
</style>
</head>
<body>
<h1>Cadastro de Pets</h1>

<img class="logo" src="logopetcafe-removebg-preview.png" alt="logo empresa"
   width="150" height="140">

<form id="animalForm">
    <label for="type">Tipo:</label>
    <select id="type" name="type">
        <option value="gato">Gato</option>
        <option value="cachorro">Cachorro</option>
    </select><br><br>
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="breed">Raça:</label>
    <input type="text" id="breed" name="breed"><br><br>
    <label for="color">Cor:</label>
    <input type="text" id="color" name="color"><br><br>
    <label for="weight">Peso (kg):</label>
    <input type="text" id="weight" name="weight"><br><br>
    <button type="submit">Adicionar</button>
</form>

<table id="animalTable">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Nome</th>
            <th>Raça</th>
            <th>Cor</th>
            <th>Peso (kg)</th>
            <th>Foto</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<script>
    document.getElementById("animalForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var type = document.getElementById("type").value;
        var name = document.getElementById("name").value;
        var breed = document.getElementById("breed").value;
        var color = document.getElementById("color").value;
        var weight = document.getElementById("weight").value;
        if (name && type && breed && color && weight) {
            addAnimal(type, name, breed, color, weight);
            document.getElementById("animalForm").reset();
        } else {
            alert("Por favor, preencha todos os campos.");
        }
    });

    function addAnimal(type, name, breed, color, weight) {
        var table = document.getElementById("animalTable").getElementsByTagName("tbody")[0];
        var newRow = table.insertRow(table.rows.length);
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        var cell5 = newRow.insertCell(4);
        var cell6 = newRow.insertCell(5);
        var cell7 = newRow.insertCell(6);
        cell1.innerHTML = type;
        cell2.innerHTML = name;
        cell3.innerHTML = breed;
        cell4.innerHTML = color;
        cell5.innerHTML = weight;
        cell6.innerHTML = '<img class="animal-img" src="' + getImageUrl(type) + '" alt="' + type + '">';
        cell7.innerHTML = '<button onclick="editAnimal(this)">Editar</button> <button onclick="deleteAnimal(this)">Excluir</button>';
    }

    function editAnimal(button) {
        var row = button.parentNode.parentNode;
        var type = row.cells[0].innerHTML;
        var name = row.cells[1].innerHTML;
        var breed = row.cells[2].innerHTML;
        var color = row.cells[3].innerHTML;
        var weight = row.cells[4].innerHTML;
        document.getElementById("type").value = type;
        document.getElementById("name").value = name;
        document.getElementById("breed").value = breed;
        document.getElementById("color").value = color;
        document.getElementById("weight").value = weight;
        row.remove();
    }

    function deleteAnimal(button) {
        var row = button.parentNode.parentNode;
        row.remove();
    }

    function getImageUrl(type) {
        if (type === 'gato') {
            var randomCat = Math.floor(Math.random() * 10) + 1; // Gera um número aleatório entre 1 e 10
            return 'https://cataas.com/cat/says/RandomCat' + randomCat; // API pública para imagens aleatórias de gatos
        } else if (type === 'cachorro') {
            var randomDog = Math.floor(Math.random() * 100) + 1; // Gera um número aleatório entre 1 e 100
            return 'https://placedog.net/500/280?id=' + randomDog; // API pública para imagens aleatórias de cachorros
        }
    }
</script>

</body>
</html>
