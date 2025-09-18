@extends ('Produtos.layout')

@section ('title')

@section('content')

 <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card" margin-top: 50px;>
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Cadastre-se para receber novidades</h3>
                        </div>
                        <div class="card-body">
                            <form action = "/musicaController" method = "POST">
                            @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="Login" class="form-label">Login:</label>
                                        <input type="text" class="form-control" id="Login" name='nome' required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="email" class="form-label">Senha:</label>
                                        <input type="email" class="form-control" id="email" name='email' required>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i>Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
