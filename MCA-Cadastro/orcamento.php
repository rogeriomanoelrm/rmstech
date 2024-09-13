<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Cadastrar</title>
    <link rel="stylesheet" href="mca20.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php
    require './Conn.php';
    require './User.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($formData['SendAddUser'])) {
        // var_dump($formData);
        // die();
        $createUser = new User();
        $createUser->formData = $formData;
        $value = $createUser->index();

        if ($value) {
            header("Location: emptypage.html");
            echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        } else {
            echo "<p style='color: #f00;'>Error!</p>";
        }
    }

    ?>

<header id="ham">

<nav>


<img class="rmslogo" src="./img/rms tech.gif" alt="">

<img id="bt-fechar" src="./img/bt-fechar.gif" alt="">
                <img id="bt-hamburguer" src="./img/btfechar.gif" alt="">


    <ul class="menu-principal">
        <lu><a href="./produtos.php">Produtos</a></lu>
        <lu><a href="./index.php">Serviços</a></lu>
        <lu>Orçamento</lu>
        <lu><a href="./localizacao.html">Localização</a></lu>

    </ul>
 
</header>



    <form id="contato" name="CreateUser" method="POST" action="">






        <div class="main" id="main">


        <label>Marca: </label>
<select id="marca" name="marca" onchange="updateModelos()">
    <option value="samsung">Samsung</option>
    <option value="motorola">Motorola</option>
    <option value="apple">Apple</option>
    <option value="xiaomi">Xiaomi</option>
</select>

<label>Modelo</label>
<select id="modelo" name="modelo">
    <option value="">Modelo</option>
</select>


    <!-- Adicione mais opções conforme necessário -->
</select>

<label>Serviço</label>
<select id="defeito" name="defeito">
    <option value="">Defeito</option>
    <option value="tela-quebrada">Troca de tela</option>
    <option value="bateria">Troca de Bateria</option>
    <option value="nao-liga">Não Liga</option>
    <option value="nao-liga">Troca do dock de carga</option>
    <option value="aquecimento">Reparo em Placa</option>
    <!-- Adicione mais opções conforme necessário -->
</select>

            <label>Whats:</label>
            <input id="#telefone" type="text" name="telefone" placeholder="" /> 
            
            






            <div class="buttons">
                <input href="emptypage.php" type="submit" value="ENVIAR" name="SendAddUser" />
            </div>


            <script>
function updateModelos() {
    // Obtenha a marca selecionada
    var marca = document.getElementById("marca").value;

    // Obtenha o elemento do modelo
    var modeloSelect = document.getElementById("modelo");

    // Limpe as opções existentes
    modeloSelect.innerHTML = '<option value="">Selecione o modelo</option>';

    // Defina as opções com base na marca selecionada
    var modelos = {
        samsung: ['Galaxy A01', 'Galaxy A02s', 'Galaxy A11', 'Galaxy A12', 'Galaxy A21s', 'Galaxy A31', 'Galaxy A32', 'Galaxy A41', 'Galaxy A51', 'Galaxy A52', 'Galaxy A71', 'Galaxy A72'
,'Galaxy M01', 'Galaxy M02', 'Galaxy M11', 'Galaxy M12', 'Galaxy M21', 'Galaxy M22', 'Galaxy M31', 'Galaxy M32', 'Galaxy M42', 'Galaxy M51', 'Galaxy M52', 'Galaxy M62'
, 'Galaxy S8', 'Galaxy S8+', 'Galaxy S9', 'Galaxy S9+', 'Galaxy S10', 'Galaxy S10+', 'Galaxy S10e', 'Galaxy S20', 'Galaxy S20+', 'Galaxy S20 Ultra', 'Galaxy S21', 'Galaxy S21+', 'Galaxy S21 Ultra', 'Galaxy S22', 'Galaxy S22+', 'Galaxy S22 Ultra', 'Galaxy S23', 'Galaxy S23+', 'Galaxy S23 Ultra'
],
        motorola: ['Moto G1', 'Moto G2', 'Moto G3', 'Moto G4', 'Moto G4 Play', 'Moto G4 Plus', 'Moto G5', 'Moto G5S', 'Moto G5 Plus', 'Moto G5S Plus', 'Moto G6', 'Moto G6 Play', 'Moto G6 Plus', 'Moto G7', 'Moto G7 Play', 'Moto G7 Power', 'Moto G7 Plus', 'Moto G8', 'Moto G8 Play', 'Moto G8 Power', 'Moto G8 Plus', 'Moto G9', 'Moto G9 Play', 'Moto G9 Plus', 'Moto G10', 'Moto G10 Power', 'Moto G20', 'Moto G30', 'Moto G40 Fusion', 'Moto G50', 'Moto G60', 'Moto G60s', 'Moto G100', 'Moto E', 'Moto E2', 'Moto E3', 'Moto E4', 'Moto E4 Plus', 'Moto E5', 'Moto E5 Play', 'Moto E5 Plus', 'Moto E6', 'Moto E6 Play', 'Moto E6 Plus', 'Moto E7', 'Moto E7 Plus', 'Moto E7 Power', 'Moto E20', 'Moto E30', 'Moto E40', 'Motorola Edge', 'Motorola Edge+', 'Motorola Edge 20', 'Motorola Edge 20 Lite', 'Motorola Edge 20 Pro', 'Motorola Edge 30', 'Motorola Edge 30 Pro', 'Motorola Edge 30 Fusion', 'Motorola Edge 30 Neo', 'Motorola Edge 40'


],
        apple: ['iPhone 2G', 'iPhone 3G', 'iPhone 3GS', 'iPhone 4', 'iPhone 4S', 'iPhone 5', 'iPhone 5C', 'iPhone 5S', 'iPhone 6', 'iPhone 6 Plus', 'iPhone 6S', 'iPhone 6S Plus', 'iPhone SE (1ª geração)', 'iPhone 7', 'iPhone 7 Plus', 'iPhone 8', 'iPhone 8 Plus', 'iPhone X', 'iPhone XR', 'iPhone XS', 'iPhone XS Max', 'iPhone 11', 'iPhone 11 Pro', 'iPhone 11 Pro Max', 'iPhone SE (2ª geração)', 'iPhone 12 Mini', 'iPhone 12', 'iPhone 12 Pro', 'iPhone 12 Pro Max', 'iPhone 13 Mini', 'iPhone 13', 'iPhone 13 Pro', 'iPhone 13 Pro Max', 'iPhone SE (3ª geração)', 'iPhone 14', 'iPhone 14 Plus', 'iPhone 14 Pro', 'iPhone 14 Pro Max'
],
        xiaomi: ['Redmi Note 10', 'Mi 11', 'Poco X3']
    };

    // Se a marca foi selecionada, adicione as opções correspondentes
    if (marca && modelos[marca]) {
        modelos[marca].forEach(function(modelo) {
            var option = document.createElement("option");
            option.value = modelo.toLowerCase().replace(/ /g, '-');
            option.text = modelo;
            modeloSelect.appendChild(option);
        });
    }
}
</script>




    <script src="./JS/jquery-3.7.1.min.js"></script>
<script src="./JS/menu-hamburguer.js"></sCRipt>





        </div>


        <br><br>

    </form>


    
</body>

</html>