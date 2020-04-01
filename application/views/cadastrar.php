<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <form method="post" action="cadastro" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="nome">Nome da Pessoa</label>
                  <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome da pessoa" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Insira aqui o nome da pessoa</small>
                </div>
                <div class="form-group">
                  <label for="distro">Insira aqui a imagem da distro</label>
                  <input type="file" class="form-control-file" name="distro" id="distro" placeholder="distro" >
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>