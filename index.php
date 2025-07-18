<?php
$titulo_pagina = "Bem-vindo ao nosso website";
$descricao_pagina = "Somos uma empresa de terceirização de serviços de contabilidade, constituída por profissionais com larga experiência nas áreas em que atuamos: Contábil - Tributária - Fiscal e Trabalhista.";
$index = true;
?>
<?php include_once('header.php'); ?>

<section class="bkg">

    <div class="container pt-10"> 
        <h2 class="text-align-center mb-5"> <span class="font-weight-400">Acesso </span>Rápido </h2>
        <div class="row text-align-center">
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-file-invoice fa-3x cor-c2 ico"></i>
                <h5 class="my-2"> Tabelas <span class="font-weight-400"> Práticas </span> </h5>
                <a href="tabelas.php" target="_self" rel="noopener noreferrer" class="bt bt-b1"> Acessar </a>
            </div>
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-calendar-alt fa-3x cor-c2 ico"></i>
                <h5 class="my-2"> Agenda de <span class="font-weight-400">Obrigações </span> </h5>
                <a href="agendas.php" target="_self" rel="noopener noreferrer" class="bt bt-b1"> Acessar </a>
            </div>
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-folder-open fa-3x cor-c2 ico"></i>
                <h5 class="my-2"> Modelos de<span class="font-weight-400"> Documentos </span> </h5>
                <a href="modelos-documentos.php" target="_self" rel="noopener noreferrer" class="bt bt-b1"> Acessar </a>
            </div>
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-file-invoice-dollar fa-3x cor-c2 ico"></i>
                <h5 class="my-2"> Formulários <span class="font-weight-400"> Diversos </span> </h5>
                <a href="formularios.php" target="_self" rel="noopener noreferrer" class="bt bt-b1"> Acessar </a>
            </div>
        </div>
    </div>

    <!-- ebook -->
    <div class="container pt-10">
        <div class="row align-items-center">
            <div class="col-lg">
                <img src="assets/imgs/h4.png" alt="" width="100%" height="350px" style="object-fit: contain;">
            </div>
            <div class="col-lg-7">
                <h3 class="mb-1 font-weight-400"> Baixe <strong> gratuitamente </strong> nossos materiais exclusivos! </h3>
                <h2 class="cor-c2 mb-4"> Cadastre-se e receba nossos materiais</h2>
                
                <h5 class="font-weight-400 mb-1 mt-2"> Em nossa empresa, sempre nos preocupamos em atender todas suas <span class="cor-c2 font-weight-600">necessidades</span> </h5>
                <a href="ebook" target="_blank" class="bt bt-b2 my-1 text-transform-uppercase">Acesse nossos materiais</a>
            </div>
        </div>
    </div>

    <div class="background-light mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-4">
                    <h4 style="border-bottom: 2px solid #ccc;" class="pb-2 mb-1"> <span class="font-weight-400">Facilitador</span> Contábil </h4>
                    <div class="d-flex align-items-center flex-wrap flex-sm-nowrap">
                        <p class="m-0"> Links variados de utilidade contábil. Comprovantes, Tabelas de CNPJ, Simples, DARFs, Extratos, Imposto de Renda, Declarações, Sicalc. </p>
                        <a href="facilitador.php" target="_self" rel="noopener noreferrer" class="bt bt-b1 m-2"> Saiba mais </a>
                    </div>
                </div>
                <div class="col-lg-6 p-4">
                    <h4 style="border-bottom: 2px solid #ccc;" class="pb-2 mb-1"> <span class="font-weight-400">Certidões</span> Negativas </h4>
                    <div class="d-flex align-items-center flex-wrap flex-sm-nowrap">
                        <p class="m-0"> Certidões em âmbito Federal (Dívida Ativa, Consultas do Simples, Previdência Social, etc), também de todos os estados e municípios. </p>
                        <a href="certidoes.php" target="_self" rel="noopener noreferrer" class="bt bt-b1 m-2"> Saiba mais </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-10">
        <h2 class="text-align-center mb-0"> <span class="font-weight-400">Notícias</span> Empresariais </h2>

        <div class="row">
        <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=8'); ?>
        <?php foreach($dados as $item): ?>
            <div class="col-lg-3 col-md-6 mt-5 d-flex">
                <div class="background-light box text-align-justify d-flex flex-column justify-content-between py-2">
                    <div class="bkg-b2 cor p-2">
                        <h5 class="mb-2 font-weight-400"> <?= limitar_texto($item->titulo, 150)?> </h5>
                        <p class="m-0"> <i class="far fa-clock fa-fw"></i> [<strong><?= mostra_data($item->pubdate, '%d de %B de %Y'); ?></strong>] </p>
                    </div>
                    <p class="px-2"> <?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 180); ?> </p>
                    <a class="bt bt-b2 mx-2 text-align-center" href="noticias-ler.php?id=<?= $item->id ?>">Leia na integra</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <a class="bt bt-b1 mt-5" href="noticias.php" target="_self"> Confira todas nossas notícias </a>
    </div>

    <div class="bkg-b2 mt-10">
        <div class="container py-4 position-relative">
            <div class="row cor">
                <div class="col-lg">
                    <h4 class="mb-0 font-weight-400"> Você está procurando um </h1>
                    <h2 class="mb-1 font-weight-400"> Consultor de planos de negócios? </h2>
                    <p class="m-0"> Teremos prazer em conhecê-lo e entender sobre seus negócios, agende uma sessão de estratégia para sua empresa agora mesmo. </p>
                </div>
                <div class="col-lg-auto">
                    <h3 class="mt-0"> <small> Contato </small>  <span class="d-block font-weight-400"> WhatsApp </span> </h3>
                    <p class="m-0 d-flex align-items-center"> <i class="fab fa-fw fa-lg fa-whatsapp"></i> <a href="<?php echo $whatsapp ?>"> <span class="h4"> <?php echo $whatsapp ?> </span> </a> </p>
                </div>  
                <div class="col-lg-auto">
                    <h3 class="mt-0"> <small> Suporte </small>  <span class="d-block font-weight-400"> E-mail </span> </h3>
                    <p class="m-0 d-flex align-items-center"> <i class="fas fa-fw fa-lg fa-envelope"></i> <a href="mailto:<?php echo $email ?>">  <?php echo $email ?> </a> </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-10"> 
        <h2 class="text-align-center mb-5"> <span class="font-weight-400">Links </span>Importantes </h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <a href="https://www.gov.br/receitafederal/pt-br" target="_blank" rel="noopener noreferrer" class="bt bt-b1v m-1"> Receita Federal </a>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <a href="https://cfc.org.br" target="_blank" rel="noopener noreferrer" class="bt bt-b1v m-1"> C.F. de Contabilidade </a>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <a href="http://www8.receita.fazenda.gov.br/simplesnacional/" target="_blank" rel="noopener noreferrer" class="bt bt-b1v m-1"> Simples Nacional </a>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <a href="https://www.gov.br/pt-br" target="_blank" rel="noopener noreferrer" class="bt bt-b1v m-1"> Portal Brasil </a>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <a href="https://www.sebrae.com.br/sites/PortalSebrae/" target="_blank" rel="noopener noreferrer" class="bt bt-b1v m-1"> Sebrae </a>    
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <a href="crc.php" target="_self" rel="noopener noreferrer" class="bt bt-b1v m-1"> CRC's Estaduais </a>
            </div>
        </div>
    </div>

</section>

<?php include_once('footer.php'); ?>

