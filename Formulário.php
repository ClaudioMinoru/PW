<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>

        <script type="text/javascript">
            window.onload=()=>{
                alert("Insira suas Informações nos Campos Designados");
                const nome = document.getElementById("nome");
                let endereco = document.getElementById("endereco");
                let numero = document.getElementById("numero");
                let cep = document.getElementById("cep");
                let complemento = document.getElementById("complemento");
                let bairro = document.getElementById("bairro");
                let cidade = document.getElementById("cidade");
                let estado = document.getElementById("estado");
                let bt = document.getElementById("bt");
                let frm = document.getElementsByTagName("form")[0]

            bt.onclick =()=>{
                
                if(nome.value.length <= 2){
                alert("Nome Inválido!!!");
                nome.style.borderColor = "red";
                nome.focus();
                }
            
                if(endereco.value.length <= 3){
                alert("Endereço Inválido!!!");
                endereco.style.borderColor = "red";
                endereco.focus();
                }

                if(numero.value.length <= 1){
                alert("Número Inválido!!!");
                numero.style.borderColor = "red";
                numero.focus();
                }

                if(cep.value.length <= 8){
                alert("CEP Inválido!!!");
                cep.style.borderColor = "red";
                cep.focus();
                }

                if(complemento.value.length <= 0){
                alert("Complemento Inválido!!!");
                complemento.style.borderColor = "red";
                complemento.focus();
                }

                if(bairro.value.length <= 5){
                alert("Bairro Inválido!!!");
                bairro.style.borderColor = "red";
                bairro.focus();
                }

                if(cidade.value.length <= 3){
                alert("Cidade Inválido!!!");
                cidade.style.borderColor = "red";
                cidade.focus();
                }

                if(estado.value.length <= 1){
                alert("Estado Inválido!!!");
                estado.style.borderColor = "red";
                estado.focus();
                }

                frm.submit();
            }
            }
        </script>         
    </head>


    <body>
        <form action="sequencia.php" method="post" enctype="multipart/form-data">
            <div>
                <label> Nome: </label>
                <input type="text" name="nome" id="nome">
                <?php if( isset($_REQUEST["erro"])){
                    echo "<spam style ='color: red'>*</spam>";
                }
                ?>
            </div>
        <br/>
            <div>
                <label> Endereço: </label>
                <input type="text" name="endereco" id="endereco">
                <?php 
                    if(isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "endereco"){
                    echo "<spam style ='color: red'>*</spam>";
                    }
                ?>
            </div>
        <br/>
            <div>
                <label> Número: </label>
                <input type="text" name="numero" id="numero">
                <?php 
                    if(isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "numero"){
                    echo "<spam style ='color: red'>*</spam>";
                    }
                ?>
            </div>            
        <br/>
            <div>
                <label> CEP: </label>
                <input type="text" name="cep" id="cep">
                <?php 
                    if(isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "cep"){
                    echo "<spam style ='color: red'>*</spam>";
                    }
                ?>
            </div>
        <br/>
            <div>
                <label> Complemento: </label>
                <input type="text" name="complemento" id="complemento">
                <?php 
                    if(isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "complemento"){
                    echo "<spam style ='color: red'>*</spam>";
                    }
                ?>
            </div>
        <br/>
            <div>
                <label> Bairro: </label>
                <input type="text" name="bairro" id="bairro">
                <?php 
                    if(isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "bairro"){
                    echo "<spam style ='color: red'>*</spam>";
                    }
                ?>
            </div>
        <br/>
            <div>
                <label> Cidade: </label>
                <input type="text" name="cidade" id="cidade">
                <?php 
                    if(isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "cidade"){
                    echo "<spam style ='color: red'>*</spam>";
                    }
                ?>
            </div>
        <br/>
            <div>
                <label> Estado: </label>
                <input type="text" name="estado" id="estado">
                <?php 
                    if(isset($_REQUEST["erro"]) && $_REQUEST["erro"] == "estado"){
                    echo "<spam style ='color: red'>*</spam>";
                    }
                ?>
            </div>
        <hr/>
            <div>
                <label> sexo: </label>
                <input type="radio" name="sexo" id="sexo" value="M"> Masculino
                <input type="radio" name="sexo" id="sexo" value="F"> Feminino
                <input type="radio" name="sexo" id="sexo" value="N"> Outros
            </div>
        <br/>
            <form action="sequencia.php" method="request" enctype="multipart/form-data">
            <div>
                <label>Imagem</label>
                <input type="file" name="arq" id="arq"/>
            </div>
        <br/>
            </form>
                <div>
                    <input type="button" id="bt" value="enviar"/>
                </div>
            </form>
    </body>
</html>