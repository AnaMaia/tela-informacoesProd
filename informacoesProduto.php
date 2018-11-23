<?php require_once __DIR__."/indexperfil.php" ?>


    <div id="page-wrapper">
        <!-- Page Content -->

        <div id="page-inner" class="container">


            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="thumbnail">
                        <a href="#"><img class="card-img-top" src="../../assets/imagesSalvas/<?= $produto->imagem ?>" alt=""></a>

                    </div>
                    <h3 class="ui horizontal divider header"><i class="tag icon"></i>Descrição</h3>
                    <div class="panel panel-primary">

                        <div class="panel-body">
                            <p><?= $produto->descricao ?></p>
                        </div>


                    </div>
                </div>

                <div class="col-md-5" style="background: rgba(173, 216, 230, 0.55);">

                    <h2 style="color: #0a256a; margin-top: 20px"> <?= $produto->nome ?></h2>
                    <h3 style="color: #0a256a">Referência: <?= $produto->referencia ?></h3>
                    <h3 style="color: #0a256a" > R$ <?= $produto->preco ?></h3>

                    <h3 style="color: #0a256a">*Tamanho:</h3>
                    <select name="select" class="estiloselect">
                        <option value="valor1"><?= $produto->tamanho ?></option>
                    </select>

                    <h3 style="color: #0a256a">*Cor:</h3>
                    <select name="select" class="estiloselect">
                        <option value="valor1"><?= $produto->cor ?></option>

                    </select>
                    <h3 style="color: #0a256a">*Quantidade em estoque:</h3>
                    <select name="select" class="estiloselect">
                        <option value="valor1"><?= $produto->estoque ?></option>
                    </select>

                    <h3 style="color: #0a256a">*Loja:</h3>
                    <select name="select" class="estiloselect">
                        <option value="valor1"><?=  "renner" ?></option>
                    </select>
                    <h3 style="color: #0a256a">*Vendedor:</h3>
                    <select name="select" class="estiloselect">
                        <option value="valor1"><?=  "Roberto" ?></option>
                    </select>

                    <h3 style="color: #0a256a">*Quantidade:</h3>
                    <input type="number" style="size: 130px; width: 111px; margin-right: 300px" class="estiloselect">
                    <button id="botaovenda" class="ui button" onclick="alert('Seja bem vindo(a) ao Linha de Código.')"type="submit">Vender<i class="shop icon float right"></i></button>
                    <a class="ui button" href="?acao=editar&id=<?=$produto->id;?>"><i class="fa fa-edit "></i> Editar</a>

                </div>
            </div>
        </div>
    </div>

<?php require_once "rodape.php"; ?>