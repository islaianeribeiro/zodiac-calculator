<?php include('layouts/header.php'); ?>


<div class="container d-flex align-items-center justify-content-center">
    <div class="content p-5">
        <h2>O que é signo?</h2>
        <p>
            Na astrologia, signo é cada uma das 12 partes do zodíaco, que correspondem a uma constelação e a um espaço de atuação dos planetas. O signo de uma pessoa é definido de acordo com a posição do Sol no momento do seu nascimento. Os signos são representados por símbolos, elementos e atributos, e a sua ordem é Áries, Touro, Gêmeos, Câncer, Leão, Virgem, Libra, Escorpião, Sagitário, Capricórnio, Aquário e Peixes.
        </p>
        <div class="signos">
            <img src="assets/img/aries.png" alt="aries">
            <img src="assets/img/touro.png" alt="touro">
            <img src="assets/img/gemeos.png" alt="gemeos">
            <img src="assets/img/cancer.png" alt="cancer">
            <img src="assets/img/leao.png" alt="leao">
            <img src="assets/img/virgem.png" alt="virgem">
            <img src="assets/img/libra.png" alt="libra">
            <img src="assets/img/escorpiao.png" alt="escorpiao">
            <img src="assets/img/sagitario.png" alt="sagitario">
            <img src="assets/img/capricornio.png" alt="capricornio">
            <img src="assets/img/aquario.png" alt="aquario">
            <img src="assets/img/peixes.png" alt="peixes">
        </div>

    </div>
    <div class="content p-5 ">
        <h2>Descubra seu Signo</h2>
        <p>Vamos ver o que seu signo tem a revelar!</p>

        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <label for="data_nascimento" class="form-label text-secondary">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            <button type="submit" class="btn w-100">Enviar</button>
        </form>

    </div>
</div>
<?php include('layouts/footer.php'); ?>