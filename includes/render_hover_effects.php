<?php 
	if ( ! defined( 'ABSPATH' ) ) exit; 
 ?>
<style>
    /* outros comportamentos */
    .container {
        padding: 0px !important;
        margin-left: 0px;
        margin-right: 0px;
    }
    .container-wrap {
        padding-left: 0px;
        padding-right: 0px;
    }
    .main-content{
        margin: 0 3% 0 0;
    }

    #copyright{
        margin-left:2%
    }

    /* Relativo ao plugin de bloco */
    .container-bloco {
        position: relative;
        text-align: center;
    }

    .bloco-conteudo {
        position: absolute;
        top: 40%;
        right: 5%;
        background-color: #ffffff;
        padding: 3%;
        min-width: 550px;
    }

    /* Centered text */
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .pull-left{
        float: left;
    }

    .pull-right{
        float: right;
    }

    .navegacao a {
        font-weight: bold;
        text-transform: uppercase;
        color: #1e1e1e;
        min-width: 200px;
    }

    .navegacao{
        position: absolute;
        bottom: 0%;
        padding: 3%;
        display: inline-block;
        margin-top: 10%;
        width: 100%;
    }
    .bloco-texto{
        margin-bottom: 3%;
    }

    .img_fullwidth_projetos{
        margin-top:-4% !important;
        width:150%;
        margin-left:2%;
    }

    /* desktop */
    @media (min-width: 481px) {

        .bloco-mobile{
            display: none;
        }

        .bloco-desktop {
            display: block;
            width: 110%;
        }

        .bloco-conteudo{
            max-width: 350px;
            margin-bottom: 5%;
            -webkit-box-shadow: 0px 2px 6px -3px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 2px 6px -3px rgba(0,0,0,0.75);
            box-shadow: 0px 2px 6px -3px rgba(0,0,0,0.75);
        }
        .navegacao {
            transform: translate(-50%, -50%);
            bottom: -5%;
        }

        #copyright{
            margin-top:-4%;
        }

    }

    /*  mobile */
    @media (max-width: 480px) {
        .bloco-mobile{
            display: block;
        }

        .bloco-desktop {
            display: none;
        }

        .bloco-conteudo{
            position: relative;
            padding: 0%;
            min-width: auto;
            top:auto;
            right: auto;
            box-shadow: none;
        }
        .navegacao{
            position: relative;
            padding: 0%;
            width: 100%;
        }
        .navegacao a {
            min-width: auto;
        }

        .logo_main{
            max-width: 150px !important;
            margin-top: 25% !important;
            margin-bottom: -100% !important;
            left: 8%;
            top:-240px;
        }

        .main-content {
            margin-top:0%;
            margin-left: 0%;
            margin-bottom: -15%;
        }

        #top .span_9 > .slide-out-widget-area-toggle > div, #header-outer .mobile-search .icon-salient-search, #header-outer #top #mobile-cart-link i, #header-outer .mobile-user-account .icon-salient-m-user {
            right:100%;
        }
        .bloco-mobile{
            padding-top:5%;
        }

        #copyright{
            margin-left: 6%;
        }

    }

    @media (max-width: 375px) {
        .main-content {
            margin-top:-18%;
            margin-left: 3%;
            margin-bottom: -15%;
        }

    }

    .descolamento-lateral{
        padding-left: 5%;
        padding-right: 5%;
    }


</style>

<?php if(!empty($image_url)) { ?>
    <div class="container-bloco bloco-desktop">
        <?php foreach ($image_url as $currentImgUrl) { ?>
            <img class="responsiveimage bg" src="<?php echo $currentImgUrl; ?>" alt="img" style="width:100%;">
        <?php } ?>

        <div class="bloco-conteudo bloco-conteudo-desktop">

            <div class="bloco-texto">
                <?php echo $content; ?>
            </div>

            <span class="navegacao">
                <?php if(!empty($anterior_link_url)){ ?>
                <a class="pull-left" href="<?php echo $anterior_link_url['url'] ?>"><< Anterior</a>
                <?php } ?>
                <?php if(!empty($proximo_link_url)){ ?>
                <a class="pull-right" href="<?php echo $proximo_link_url['url'] ?>">Próximo >></a>
                <?php } ?>
            </span>

        </div>
    </div>

    <div class="container-bloco bloco-mobile">
        <div class="bloco-conteudo descolamento-lateral full-width">
            <div>
                <?php echo $content; ?>
            </div>

            <span class="navegacao">
                <?php if(!empty($anterior_link_url)){ ?>
                    <a class="pull-left" href="<?php echo $anterior_link_url['url'] ?>"><< Anterior</a>
                <?php } ?>
                <?php if(!empty($proximo_link_url)){ ?>
                    <a class="pull-right" href="<?php echo $proximo_link_url['url'] ?>">Próximo >></a>
                <?php } ?>
            </span>

        </div>
        <br>
        <?php
        if(!empty($image_url)){
            foreach ($image_url as $currentImgUrl) { ?>
                <figure class="full-width">
                    <img src="<?php echo $currentImgUrl; ?>">
                </figure>
            <?php }
        } ?>
    </div>
<?php } ?>

<style>
    .full-width {
        width: 100vw;
    }
    @media all and (min-width: 600px) {
        .full-width {
            margin-left: calc(300px - 50vw);
            margin-right: calc(300px - 50vw);
        }
    }
</style>
