<script>
    window.addEventListener('load',carregarDados);

    function carregarDados() {
        let img1 = document.getElementById('img1');
        let img2 = document.getElementById('img2');
        let nome1 = document.getElementById('nome1');
        let nome2 = document.getElementById('nome2');
        let bt1 = document.getElementById('bt1');
        let bt2 = document.getElementById('bt2');
        let lista = document.getElementById('lista');
        console.log("oi");
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status==200){

                alteraDados(JSON.parse(xhttp.response));
            }
        }
        xhttp.open("GET",'/sortear',true);
        xhttp.send();
        function alteraDados(dados) {
            console.log(img1);
            img1.src='/public/images/'+dados.d1.id+'.jpg';
            img2.src='/public/images/'+dados.d2.id+'.jpg';
            nome1.innerHTML = dados.d1.nome;
            nome2.innerHTML = dados.d2.nome;
            bt1.value = dados.d1.id;
            bt2.value = dados.d2.id;

        }
    }
    function carregarLista() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status==200){

                lista.innerHTML =xhttp.responseText;
            }
        }
        xhttp.open("GET",'/top',true);
        xhttp.send();
    }
    function voto(id) {
        var post = new XMLHttpRequest();
        post.onreadystatechange = function () {
            if(this.readyState = XMLHttpRequest.DONE && this.status ==200){
                carregarDados();
                carregarLista();
            }

        }
        post.open('POST','/votar',true);
        post.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        post.send("id="+id);


    }

</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-4">
            <div class="card text-center shadow">
              <img class="card-img-top" id="img1" src="<?php echo base_url('public/images/tux.png');?>" alt="">
              <div class="card-body">
                <h4 class="card-title" id="nome1">Carregando...</h4>
                <p class="card-text">
                
                    <button type="button" id="bt1" class="btn btn-danger" onclick="voto(this.value)">Esse(a)</button>
                
                </p>
              </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card text-center shadow">
              <img class="card-img-top" id="img2"src="<?php echo base_url('public/images/tux.png');?>" alt="">
              <div class="card-body">
                <h4 class="card-title" id="nome2">Carregando...</h4>
                <p class="card-text">
                    <button type="button" class="btn btn-success" id="bt2" onclick="voto(this.value)">Aquele(a)</button>
                </p>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="lista">