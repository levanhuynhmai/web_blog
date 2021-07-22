<nav class="navbar navbar-expand-md fixed-top bg-white site-header navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('trangchu')}}">
        
            <img src="{{asset("layout/default/img/logo.png")}}" style="width:50px;" class="img-responsive" alt="logo">BLOG
            
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                    <li class="nav-item">
                        <a class="nav-link" href="{{route('affiliate')}}">💵 Kiếm tiền online</a>
                    </li>
                                    <li class="nav-item">
                        <a class="nav-link" href="{{route('host')}}">🔖 Domain &amp; Hosting</a>
                    </li>
                                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sharecode')}}">🚀 Chia sẽ code</a>
                    </li>
                                    <li class="nav-item">
                        <a class="nav-link" href="{{route('toolfb')}}">🔠 Tool Facebook</a>
                    </li>
                            </ul>

            <form action="https://tweb.com.vn/search" class="d-flex">
                <label for="q"></label>
                <input type="search" value="" required="" placeholder="Input keyword..." name="q" id="q" class="form-control me-2">

                <button style="min-width: 100px; margin-left:2px;" class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i> Search
                </button>
            </form>
        </div>
    </div>
</nav>