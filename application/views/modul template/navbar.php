<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
    <a class="navbar-brand" href="<?= base_url('en'); ?>">
        <img src="https://app-sorteos.com/img/logo2.png" alt="" width="160">
    </a>
    <button class="navbar-toggler" class="navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item mr-4">
                <a href="<?= base_url('Pricing'); ?>" class="nav-link">
                <strong>Pricing</strong>
                </a>
            </li>
            <li class="nav-item mr-4">
                <a href="https://app-sorteos.com/en/faqs" class="nav-link">
                <strong>Help</strong>
                </a>
            </li>
            <li class="nav-item mr-4">
                <a href="https://app-sorteos.com/en/support" class="nav-link">
                <strong>Contact</strong>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://app-sorteos.com/en/apps" class="btn btn-md btn-primary my-2 my-sm-0 btn-success btn-bold">
                <i class="fas fa-plus mr-2"></i>Create Giveaway 
                </a>
            </li>
            <li class="nav-item dropdown ml-2">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                <strong style="text-transform: uppercase;">en</strong>
                </a>
                <div class="dropdown-menu dropdown-menu-lang" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('en'); ?>">English</a>
                    <a class="dropdown-item" href="<?= base_url('es'); ?>">Español</a>
                    <a class="dropdown-item" href="https://app-sorteos.com/fr">Francais</a>
                    <a class="dropdown-item" href="https://app-sorteos.com/pt">Português</a>
                </div>
            </li>
        </ul>
        </div>
</nav>