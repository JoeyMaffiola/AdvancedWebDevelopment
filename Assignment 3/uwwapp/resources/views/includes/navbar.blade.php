<!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0%;">
        <div class="container-fluid" style="background-color: purple;"> <!-- This is the purple background of the navbar-->
            <a class="navbar-brand" href="#">UWW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/coursesbysubject')}}">Course Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/schedule')}}">Schedule of Classes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>