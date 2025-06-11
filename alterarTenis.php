<?php include ('head.php'); ?>
    <?php include ('topo.php'); ?>
    <?php 
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    ?>
    <body>
        <?php 
        @require ('connect.php');
        $cod = $_GET['cod'];
        $tenis = mysqli_query($con, "Select * from `tb_produtos` where `codigo` = '$cod'");
        $tenis = mysqli_fetch_assoc($tenis);
        ?>
        
        <div class="divForm">
            <form action="alterarTenis.act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="codigo" value="<?php echo $tenis['codigo']; ?>">
                <input type="hidden" name="codigo" value="<?php echo $tenis['Foto']; ?>">
                <p>Marca:</p>
                <p><input type="text" name="Marca" id="" value="<?php echo isset($tenis['Marca']) ? $tenis['Marca'] : null ; ?>"</p>
                
                <p>Valor:</p>
                <p><input type="text" name="Valor" id="" value="<?php echo isset($tenis['Valor']) ? $tenis['Valor'] : null ; ?>"></p>
                
                <p>
                    Tamanho:
                    <select name="Tamanho" id="">
                        <option value=""></option>
                        <option value="37"<?php echo isset($tenis['37']) ? $tenis['37'] : null ; ?>>Tam 37</option>
                        <option value="38"<?php echo isset($tenis['38']) ? $tenis['38'] : null ;?>>Tam 38</option>
                        <option value="39"<?php echo isset($tenis['39']) ? $tenis['39'] : null ;?>>Tam 39</option>
                        <option value="40"<?php echo isset($tenis['40']) ? $tenis['40'] : null ;?>>Tam 40</option>
                        <option value="41"<?php echo isset($tenis['41']) ? $tenis['41'] : null ;?>>Tam 41</option>
                        <option value="42"<?php echo isset($tenis['42']) ? $tenis['42'] : null ;?>>Tam 42</option>
                    </select>
                </p>
                
                <p>
                    Cor:
                    <Select name="Cor" id="">
                        <option value=""></option>
                        <option value="Branco"<?php if($tenis['Cor']=='Branco'){echo "selected";}?>>Branco</option>
                        <option value="Preto" <?php echo "isset($tenis[Cor]) ? $tenis[Cor] : null ; "?>Preto</option>
                        <option value="Roxo">Roxo</option>
                        <option value="Azul">Azul</option>
                        <option value="Vermelho">Vermelho</option>
                        <option value="Amarelo">Amarelo</option>
                    </Select>
                </p>
                
                <p>Descrição:</p>
                <p>
                    <textarea name="Descricao" id="txtDescricao" cols="30" rows="10"><?php echo isset($tenis['Descricao']) ? $tenis['Descricao'] : null ; ?></textarea>
        </p>
        <p><img src="<?php echo $tenis['Foto']; ?>" alt=""></p>
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