@extends('templates.master')
@section('content')
    <header>
        <div class="container-fluid header">
            <nav class="navbar">
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/brand.png" width="80" height="80" class="d-inline-block align-top" alt="logo com 8 mãos levantadas. Um coração está desenhado no centro de cada mão">
                    <span id="logo-name">
                        Ajuda social
                    </span>
                </a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col-xs-12">
                    {{-- TODO: Criar chamada, explicar o que é este site e chamar para uma doação --}}
                    <h1>
                        A medida de uma vida, afinal, não é sua duração, mas sua doação.
                    </h1>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Para localizar instituição mais próxima informe seu CEP</h3>
                    <form action="">
                        <label for="cep">CEP</label>
                        <input type="text" name="" id="cep">
                        <button type="submit" class="btn-primary btn-sm">Procurar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        {{-- TODO: Direitos autorais, explicações legais, etc --}}
    </footer>
@endsection