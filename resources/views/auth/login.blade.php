@extends('layouts.head')


<body class="login-bg">

    <div class="container">
        <div class="login-screen row align-items-center">
            <div class="col-sm-12">
                <form action="index.html">
                    <div class="login-container">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                <div class="login-box">
                                    <a href="#" class="login-logo">
                                        <img src="{{ asset('img/logo-pmi.png') }}" alt="Logo PMI" />
                                    </a>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="ID">
                                                <i class="icon-account_circle"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ID" aria-label="ID" aria-describedby="ID">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="password">
                                                <i class="icon-verified_user"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="Password">
                                    </div>
                                    <div class="actions clearfix">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                                <div class="login-slider"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="main-footer no-bdr fixed-btm">
        <div class="container">
            © Solo Digital Solution 2024
        </div>
    </footer>
</body>

</html>