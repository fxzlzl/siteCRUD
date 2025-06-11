<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionando Produtos</title>
</head>
<body>
        <?php 
        @session_start();
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>
    <div class="divForm">
        <form action="addTenis.act.php" method="post" enctype="multipart/form-data">
            <p>Marca:</p>
            <p><input type="text" name="Marca" id=""></p>
            
            <p>Valor:</p>
            <p><input type="text" name="Valor" id=""></p>
            
            <p>
                Tamanho:
                <Select name="Tamanho" id="">
                    <option value=""></option>
                    <option value="37">Tam 37</option>
                    <option value="38">Tam 38</option>
                    <option value="39">Tam 39</option>
                    <option value="40">Tam 40</option>
                    <option value="41">Tam 41</option>
                    <option value="42">Tam 42</option>
                </Select>
            </p>
            
            <p>
                Cor:
                <Select name="Cor" id="">
                    <option value=""></option>
                    <option value="Branco">Branco</option>
                    <option value="Preto">Preto</option>
                    <option value="Roxo">Roxo</option>
                    <option value="Azul">Azul</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Amarelo">Amarelo</option>
                </Select>
            </p>
            
            <p>Descrição:</p>
            <p>
                <textarea name="Descricao" id="txtDescricao" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="fileFoto">Foto</label>
                <input type="file" name="Foto" id="fileFoto">
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    </div>
    
    </body>
</html>