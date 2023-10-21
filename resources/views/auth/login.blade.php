@extends('layouts.default')

@section('content')
    <main>
        <!-- Login -->
        <section id="login" class="pt-10 pb-14 pt-25">
            <div class="container">
                <div class="row justify-content-center" data-cue="fadeIn">
                    <div class="col-12 col-xl-4 col-lg-6 col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <!-- Heading -->
                                <div class="heading">
                                    <h1 class="title fs-4 text-uppercase ls-1 ff-sub">Login to Bilury</h1>
                                </div>
                                @if(session()->has('success_message'))
                                    <div class="alert alert-success">
                                        <span>You successfully register. Let's login!</span>
                                    </div>
                                @endif
                                <!-- /Heading -->
                                <hr>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif
                                <!-- Form Login -->
                                <form class="" method="post" novalidate="" action="{{ route('postLogin') }}">
                                    {{ csrf_field() }}
                                    <!-- Login Facebook/Google -->
                                    <div class="row g-4 mb-5">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-center shadow-sm w-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 1000 1000" width="20" height="20">
                                                    <path fill="#3b579d" d="M500 1000A500 500 0 0 1 500 0a500 500 0 0 1 0 1000z" />
                                                    <path fill="#fff" d="M630 1000V613h130l20-151H630v-97c0-43 12-73 75-73h80V157c-14-2-62-6-117-6-115 0-194 70-194 200v111H344v151h130v387h156z" />
                                                </svg>
                                                <span class="ms-3">Facebook</span>
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-center shadow-sm w-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 534 544" width="20" height="20">
                                                    <path fill="#4285f4" d="M534 278c0-18-2-37-5-55H272v105h147c-6 34-26 64-54 83v68h87c52-48 82-118 82-201z" />
                                                    <path fill="#34a853" d="M272 544c74 0 135-24 181-65l-88-68c-25 16-56 26-93 26-71 0-131-48-153-113H29v70c46 92 140 150 243 150z" />
                                                    <path fill="#fbbc04" d="M119 324c-11-33-11-70 0-104v-70H29c-39 77-39 168 0 244l90-70z" />
                                                    <path fill="#ea4335" d="M272 108c39-1 76 14 105 41l77-78a272 272 0 0 0-425 79l90 70c22-64 82-112 153-112z" />
                                                </svg>
                                                <span class="ms-3">Google</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /Login Facebook/Google -->
                                    <hr>
                                    <!-- Login Email -->
                                    <div class="mb-5">
                                        <label for="txtEmail2" class="form-label">Email<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="" name="email" value="" placeholder="" required="">
                                    </div>
                                    <div class="mb-5">
                                        <label for="txtPassword2" class="form-label">Password<span class="text-danger">*</span></label>
                                        <input class="form-control" id="" name="password" placeholder="" value="" type="password" required="">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-5">
                                                <div class="form-check">
                                                    <input class="form-check-input shadow-sm" type="checkbox" value="" id="chkRemember2">
                                                    <label class="form-check-label" for="chkRemember2"><span class="text-body">Remember me</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-5 text-end">
                                                <a href="forgot-password.html">Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <button type="submit" class="btn btn-primary w-50" id="btnSubmit2">
                                            <i class="hicon hicon-aps-lock"></i>
                                            <span>Login</span>
                                        </button>
                                    </div>
                                    <hr>
                                    <div> New here? <a href="{{ route('register') }}">Create an account</a>
                                    </div>
                                    <!-- /Login Email -->
                                </form>
                                <!-- /Form Login -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Login -->
    </main>
@endsection