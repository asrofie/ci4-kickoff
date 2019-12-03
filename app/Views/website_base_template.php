<?= $this->extend('base_template'); ?>
<?= $this->section('page_body_class'); ?>
layout-3
<?= $this->endSection(); ?>
<?= $this->section('page_content'); ?>
<div class="main-wrapper container">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
    <a href="index.html" class="navbar-brand sidebar-gone-hide"><?= APP_NAME ?></a>
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
        <i class="fas fa-ellipsis-v"></i>
        </a>
        <ul class="navbar-nav">
        <li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li>
        </ul>
    </div>
    
    <ul class="ml-auto navbar-nav navbar-right">
        <li class="nav-item"><a href="<?= base_url('auth/login') ?>" class="nav-link">Login</a></li>
    </ul>
    </nav>

    <nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
            <li class="nav-item"><a href="index-0.html" class="nav-link">General Dashboard</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link">Ecommerce Dashboard</a></li>
            </ul>
        </li>
        <li class="nav-item active">
            <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Top Navigation</span></a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Multiple Dropdown</span></a>
            <ul class="dropdown-menu">
            <li class="nav-item"><a href="#" class="nav-link">Not Dropdown Link</a></li>
            <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Hover Me</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Link 2</a>
                    <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                </ul>
            </li>
            </ul>
        </li>
        </ul>
    </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Top Navigation</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Top Navigation</div>
        </div>
        </div>

        <div class="section-body">
        <h2 class="section-title">This is Example Page</h2>
        <p class="section-lead">This page is just an example for you to create your own page.</p>
        <div class="card">
            <div class="card-header">
            <h4>Example Card</h4>
            </div>
            <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="card-footer bg-whitesmoke">
            This is card footer
            </div>
        </div>
        </div>
    </section>
    </div>
    <footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">
        
    </div>
    </footer>
</div>
<?= $this->endSection(); ?>