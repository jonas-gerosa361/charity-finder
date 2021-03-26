@extends('templates.master')
@push('css')
    {{-- css here --}}
@endpush
@section('content')
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Ajuda social
                {{-- TODO: Procurar imagem de logo --}}
            </a>
        </nav>
    </header>
    <main>
        {{-- TODO: Criar chamada, explicar o que é este site e chamar para uma doação --}}
        <h1>
            A medida de uma vida, afinal, não é sua duração, mas sua doação.
        </h1>
    </main>
    <footer>
        {{-- TODO: Direitos autorais, explicações legais, etc --}}
    </footer>
@endsection