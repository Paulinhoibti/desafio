@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar Produto
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">

                <div class="form-group">
                    {!! Form::open(['route' => 'produtos.store']) !!}

                    @include('produtos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
