<footer class="bg-dark text-light pt-5 pb-4 mt-auto">
    <div class="container">
        <div class="row">

            <!-- Coluna 1: Sobre -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Sobre</h5>
                <p>Este é um projeto desenvolvido em CodeIgniter 4 com Bootstrap, voltado para aplicações web modernas e responsivas.</p>
            </div>

            <!-- Coluna 2: Links úteis -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('/') ?>" class="text-decoration-none text-light">Início</a></li>
                    <li><a href="<?= base_url('sobre') ?>" class="text-decoration-none text-light">Sobre</a></li>
                    <li><a href="<?= base_url('contato') ?>" class="text-decoration-none text-light">Contato</a></li>
                </ul>
            </div>

            <!-- Coluna 3: Redes Sociais -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Redes Sociais</h5>
                <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <hr class="border-light my-4">

        <div class="text-center">
            <p class="mb-0">© <?= date('Y') ?> Meu Projeto CI4. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
</html>