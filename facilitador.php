
<?php
$titulo_pagina = "Facilitador Contábil";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php include_once('header.php'); ?>

<div class="banner-foto">
    <div class="container position-relative overflow-hidden py-4">
        <div class="py-1">
            <h5 class="mb-1 font-weight-300"> Venha fazer uma parceria de sucesso! </h5>
            <h1 class="mb-0 cor-c2"> <?php echo $titulo_pagina ?> </h1>
        </div>
    </div>
</div>

<article class="background-white">

    <div class="container py-5 text-align-justify overflow-hidden">

        <?php include_once('paginas/facilitador.php'); ?>

    </div>

</article>

<?php include_once('footer.php'); ?>