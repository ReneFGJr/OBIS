<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_URL(''); ?>">
            <img src="<?= base_url('assets/img/logo/logo_obs.png') ?>" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_URL(''); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Plataformas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Datasets</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ferramentas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Pesquisadores</a></li>
                        <li><a class="dropdown-item" href="#">Cidadão</a></li>
                        <li><a class="dropdown-item" href="#">Instituições</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar no site" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Busca</button>
            </form>
        </div>
    </div>
</nav>