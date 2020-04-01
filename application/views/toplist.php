
    <div class="row justify-content-center">
        <div class="col-xl-6 text-center justify-content-center">
            <h1>Os 10 mais votados.</h1>
            <table class="table">
                <thead>
                    <td>Posição</td>
                    <td>Nome</td>
                    <td>Votos</td>
                </thead>

                <?php
                    $i =1;
                    foreach ($distros as $row){
                        ?>
                        <tr>
                            <td class="text-danger"><?php echo $i?>º</td>
                            <td><?php echo $row['Nome']?></td>
                            <td class="text-danger"><?php echo $row['Votos']?></td>
                        </tr>

                        <?php
                        $i++;
                    }

                ?>

            </table>
        </div>
    </div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
