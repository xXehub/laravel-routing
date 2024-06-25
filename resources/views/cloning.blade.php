<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Clone</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0
alpha2/dist/css/bootstrap.min.
css">
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap
icons.css
">
    <link rel="stylesheet" href="style.css">
    <link rel="" href="">
</head>

<body>
    <!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
<!-- Container -->
    <div class="container py-2 px-4">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="images/logo-white.svg"
alt="logo"
    style="width: 40px;">
            </a>
            <!-- Navbar Toggler -->
            <button type="button" class="navbar-toggler" data-bs
toggle="offcanvas"
    data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end bg-purple" id="offcanvasNavbar"> <!--
Offcanvas Header -->
    <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white"
    id="offcanvasNavbarLabel">Bootstrap</h5>
                    <button type="button" class="btn-close"
    data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
                <!-- Offcanvas Body -->
    <div class="offcanvas-body pt-0 px-4">
    <hr class="d-md-none text-white-50"> <!-- Horizontal Line -->
                    <!-- Top Menu -->
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-6 col-md-auto"><a href="#"
    class="nav-link active">Docs</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#"
    class="nav-link">Examples</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#"
    class="nav-link">Icons</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#"
    class="nav-link">Themes</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#"
    class="nav-link">Blog</a></li>
                    </ul>
    <hr class="d-md-none text-white-50"> <!-- Horizontal Line -->
                    <!-- Sosial Media  -->
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-github"></i><small class="ms-2
    d-md-none">Github</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">

      d-md-none">Twitter</small>
                            </a>
    <i class="bi-twitter"></i><small class="ms-2
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-slack"></i><small class="ms-2
    d-md-none">Slack</small>
                            </a>
    text-white"></div>
    </li>
    <li class="nav-item col-12 col-lg-auto">
        <div class="vr d-none d-lg-flex h-100 mx-lg-2
        <hr class="d-lg-none my-2 text-white-50">
    </li>
    <li class="nav-item">
    <!-- Dropdown -->
    <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link
text-white
    dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    releases</h6></li>
        <span class="d-lg-none">Bootstrap</span> v5.3
    </button>
    <ul class="dropdown-menu dropdown-menu-end">
        <li><h6 class="dropdown-header">v5
                                    <li><button class="dropdown-item active
    bg-purple" type="button"><small>Latest (5.3.x) <i
    class="bi-check"></i></small></button></li>
                                    <li><button class="dropdown-item"
    type="button"><small>v5.2.3</small></button></li>
                                    <li><button class="dropdown-item"
    type="button"><small>v5.1.3</small></button></li>
                                    <li><button class="dropdown-item"
    type="button"><small>v5.0.2</small></button></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><h6 class="dropdown-header">Previous
    releases</h6></li>
                                    <li><button class="dropdown-item"
    type="button"><small>v4.6.x</small></button></li>
                                    <li><button class="dropdown-item"
    type="button"><small>v3.4.1</small></button></li>
                                    <li><button class="dropdown-item"
    type="button"><small>v2.3.2</small></button></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button class="dropdown-item"
    type="button"><small>All versions</small></button></li>
    text-white"></div>
    </ul> </div>
    </li>
    <li class="nav-item col-12 col-lg-auto">
        <div class="vr d-none d-lg-flex h-100 mx-lg-2
        <hr class="d-lg-none my-2 text-white-50">
    </li>
    <li class="nav-item"> <!-- Dropdown -->

                              <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link
text-white
    dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-brightness-high
fill"></i><span
    class="d-lg-none">Toggle theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><button class="dropdown-item active
    bg-purple" type="button"><small><i class="bi-brightness-high-fill
    me-2"></i>Light</small></button></li>
                                    <li><button class="dropdown-item"
    type="button"><small><i class="bi-moon-stars-fill
    me-2"></i>Dark</small></button></li>
                                    <li><button class="dropdown-item"
    type="button"><small><i class="bi-circle-half
    me-2"></i>Auto</small></button></li>
    </ul> </div>
    </li> </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main -->
<div class="bg-light mt-5" id="main"> <!-- Container -->
    <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 order-md-2">
    logo">
        <img class="img-fluid" src="images/main.svg" alt="main
    </div>
    <div class="col-md-7 order-md-1">

      Bootstrap</h1>
    <h1 class="mt-4 display-3">Build fast, responsive sites with
                    <p class="fs-5 mt-3">Quickly design and customize
responsive
    mobile-first sites with Bootstrap, the world's most popular front-end open
source
    toolkit, featuring Sass variables and mixins, responsive grid system,
extensive
    prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row">
                            <button type="button" class="btn bg-purple text
white
    btn-lg mb-3 me-md-3 px-4 py-3">Get Started</button>
                            <button type="button" class="btn btn-outline-dark
btn-lg
    mb-3 px-4 py-3">Download</button>
                        </div>
                    </div>
                    <div class="text-muted">
                        Currently <strong>v5.3.0-alpha2.</strong> · <a
    href="#">v4.6.x docs</a> · <a href="#">All releases</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
<div id="bs-icons">
    <!-- Container -->
    <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <i class="bi bi-subtract fs-2 bg-warning py-2 px-3
rounded-3
    text-white"></i>
                    </div>
    Icons</h2>
    <h2 class="display-5 mb-3">Personalize it with <br/>Bootstrap
    <p class="fs-5"><a href="#">Bootstrap Icons</a> is an open source

      SVG icon library featuring over 1,800 glyphs, with more added every
release.
    They're designed to work in any project, whether you use Bootstrap itself
or not.
    Use them as SVGs or icon fonts--both options give you vector scaling and
easy
    customization via CSS.</p>
    href="#">
        <a class="icon-link icon-link-hover lead fw-semibold mb-5"
            Get Bootstrap Icons
            <i class="bi bi-arrow-right mb-2"></i>
        </a>
    </div>
    <div class="col-lg-6">
                    <img class="img-fluid" src="images/bs-icons.png"
    alt="Bootstrap Icons">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Official Themes -->
<div id="bs-themes">
    <!-- Container -->
    <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3 mt-5">
                        <i class="bi bi-droplet-fill fs-2 bg-info py-2 px-3
rounded-3
    text-white"></i>
                    </div>
                    <h2 class="display-5">Make it yours with official
Bootstrap
    Themes</h2>
                    <p class="fs-5">Take Bootstrap to the next level with
premium
    themes from the <a href="#">official Bootstrap Themes marketplace</a>.
Themes are
    built on Bootstrap as their own extended frameworks, rich with new
components and
    plugins, documentation, and powerful build tools.</p>
    href="#">
    <a class="icon-link icon-link-hover lead fw-semibold mb-5"

                          Browse Bootstrap Themes
                        <i class="bi bi-arrow-right mb-2"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/bs-themes.png"
    alt="Bootstrap Themes">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
<div id="footer" class="bg-light py-5"> <!-- Container -->
    <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="#" class="logo text-decoration-none">
                        <div class="d-flex">
                            <img class="img-fluid" src="images/logo
black.svg"
    alt="Bootstrap Logo" style="width: 40px;">
                            <div class="fs-5 ms-2 text-black">Bootstrap</div>
                        </div>
                    </a>
                    <div class="mt-2 text-muted">
                        <small>Designed and built with all the love in the
world by
    the <a href="#" class="text-black">Bootstrap team</a> with the help of <a
    href="#" class="text-black">our contributors</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Code licensed <a href="#" class="text
black">MIT</a>,
    docs <a href="#" class="text-black">CC BY 3.0</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Currently v5.3.0-alpha2.</small>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-5">

                      <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Home</a></li>
                        <li class="mb-2"><a href="#">Docs</a></li>
                        <li class="mb-2"><a href="#">Examples</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">Themes</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                        <li class="mb-2"><a href="#">Swag Store</a></li>
    </ul> </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Getting started</a></li>
                        <li class="mb-2"><a href="#">Starter template</a></li>
                        <li class="mb-2"><a href="#">Webpack</a></li>
                        <li class="mb-2"><a href="#">Parcel</a></li>
    </ul> </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="#">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">RFS</a></li>
                        <li class="mb-2"><a href="#">npm starter</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Issues</a></li>
                        <li class="mb-2"><a href="#">Discussions</a></li>
                        <li class="mb-2"><a href="#">Corporate
sponsors</a></li>
                        <li class="mb-2"><a href="#">Open Collective</a></li>
                        <li class="mb-2"><a href="#">Slack</a></li>
                        <li class="mb-2"><a href="#">Stack overflow</a></li>
    </ul> </div>
            </div>
        </div>
    </div>

    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0
alpha2/dist/js/bootstrap.bundle
.min.js"></script>
</body>
</html>
