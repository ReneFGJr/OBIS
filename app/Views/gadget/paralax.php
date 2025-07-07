<?= $this->section('content') ?>

<!-- Seção com efeito parallax -->
<div class="parallax d-flex align-items-center justify-content-center text-center">
    <div class="p-5 ms-5 mb-5">
        <?php echo view('gadget/logo'); ?>
    </div>
</div>

<!-- Conteúdo normal -->
<section class="container py-5">
    <h2>Sobre o Projeto</h2>
    <p>Este projeto usa CodeIgniter 4, Bootstrap 5 e CSS para criar páginas modernas com efeitos visuais, como parallax.</p>
</section>

<!-- Outra seção com parallax -->
<div class="parallax-2 d-flex align-items-center justify-content-center text-white text-center">
    <div>
        <h2>Scroll Suave</h2>
        <p>Observe o efeito visual ao rolar a página.</p>
    </div>
</div>

<section class="container py-5">
    <h2>Mais Conteúdo</h2>
    <p>Você pode usar quantas seções quiser com o mesmo efeito. Basta alterar a imagem de fundo no CSS.</p>
</section>

<style>
    .parallax {
        background-image: url('<?= base_url('/assets/img/parallax/parallax_01.png'); ?>');
        /* substitua se quiser */
        height: auto;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .parallax-2 {
        background-image: url('<?= base_url('/assets/img/parallax/parallax_01.png'); ?>');
        height: 60vh;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>