<?php
include('layouts/header.php');
$data_nascimento = DateTime::createFromFormat('Y-m-d', $_POST['data_nascimento']);
if (!$data_nascimento) {
    echo ("<p>A data é inválida!</p> <a href='./index.php'>");
}

$signos = simplexml_load_file('./signos.xml');
function verificar_signo($data, $inicio, $fim)
{
    $ano = $data->format('Y');
    $data_inicio = DateTime::createFromFormat('d/m/Y', "$inicio/$ano");
    $data_fim = DateTime::createFromFormat('d/m/Y', "$fim/$ano");
    if ($data_inicio > $data_fim) $data->format('m') == '01' ? $data_inicio->modify('-1 year') : $data_fim->modify('+1 year');
    return ($data >= $data_inicio && $data <= $data_fim);
}

$signo_encontrado = null;
foreach ($signos as $signo) {
    if (verificar_signo($data_nascimento, $signo->dataInicio, $signo->dataFim)) {
        $signo_encontrado = $signo;
        break;
    }
}

?>

<div class="container d-flex align-items-center justify-content-center">
    <div class="content p-5">
        <?php if ($signo_encontrado): ?>
            <h2 class="title"><span>Seu signo é:</span> <?= $signo_encontrado->signoNome ?> </h2>
            <p><?= $signo_encontrado->descricao ?></p>
        <?php else: ?>
            <p class="text-danger mb-5">Data inválida! Não foi possível encontrar um signo correspondente.</p>
        <?php endif; ?>
        <a href='./index.php' class="btn btn-secondary w-100">Voltar</a>
    </div>
</div>

<?php include('layouts/footer.php'); ?>