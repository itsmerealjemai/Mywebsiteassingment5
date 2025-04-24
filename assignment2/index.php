<html>
    <title>Assignment</title>
    <head>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/styles.css"/>
        <style>
            .border{
                border-style: solid;
            }
            .projTitle{
                text-align: center;
            }
            .img-row{
                height: 20em;
            }
        </style>
    </head
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/medyologo.jpg" id="logo" alt="logopic" width="200" height="150" style="margin-left: 90px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 30%;">
                    <!-- 👇 Add ms-auto here to push nav to the right -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item" style="padding-right:30px;">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item"style="padding-right:30px;">
                        <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item"style="padding-right:30px;">
                        <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Info
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

        </header>

        <div class="container">
            <div class="row border" style="padding: 10px; margin-top: 10px">
                <div class="col-3" id="imgTab">
                    <img src="assets/images/firstpic.jpg" alt="" style="height: 25em;">
                </div>
                    <div class="col-9" id="contentTab">
                        <h4 style="padding-left: 40px; padding-top: 40px;">Pokémon</h4>
                        <p style="padding-left: 65px; padding-top: 25px">Your dream of becoming a Trainer is not out of reach! Catch this smiling Pop! Pokémon to add to your collection. Vinyl figure is approximately 3.75 in (9.5 cm) tall.</p>
                    <button class="btn-outline-primary btn" style="margin-left: 40px; margin-top: 40px">
                        Read More
                    </button>
                </div>
            </div>
            <div class="row border" style="padding: 10px; margin-top: 10px">
                <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <img src="assets/images/1st.jpg" class="img-row" alt="1st img">
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <img src="assets/images/2nd.jpg" class="img-row" alt="2nd img">
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <img src="assets/images/4th.jpg" class="img-row" alt="3rd img">
                </div>
            </div>

        </div>
        <footer>
            <div class="row" style="margin: 5px;">
                <div class="col-6 col-lg-2 mb-3" >
                    <div class="card">
                        <img src="assets/images/last.jpg" alt="last img">
                    </div>

                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Quik Links</h5>
                    <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Home</a></li>
                    <li class="mb-2"><a href="/docs/5.3/">About</a></li>
                    <li class="mb-2"><a href="/docs/5.3/examples/">Conatct</a></li>
                    <li class="mb-2"><a href="https://icons.getbootstrap.com/">Info</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-7 mb-3">
                    <h4 class="projTitle">Project Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac convallis massa. Integer pretium, massa sit amet interdum mollis, enim lectus venenatis erat, eget porta augue magna vel velit. Vivamus imperdiet, augue ut convallis pretium, tellus sapien convallis est, sed tincidunt orci lectus quis est. Donec vitae fermentum odio. Etiam maximus metus ipsum, eget tristique nulla ultrices id. Phasellus et efficitur est. Nulla facilisi.</p>
                </div>
            </div>
        </footer>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>