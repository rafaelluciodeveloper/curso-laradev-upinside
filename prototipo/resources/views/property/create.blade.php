@extends('property.master')
@section('content')
    <div class="container my-3">
        <h1> Formulario de Cadastro :: Imoveis</h1>

        <form action="<?= url('/imoveis/store');?>" method="post">

            <?= csrf_field() ?>
            <div class="form-group">
                <label for="title">Titulo do Imovel</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descrição do Imovel</label>
                <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="rental_prince">Valor Locação</label>
                <input type="text" name="rental_price" id="rental_prince" class="form-control">
            </div>
            <div class="form-group">
                <label for="sale_price">Valor Compra</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control">
            </div>
            <input type="submit" value="Cadastrar Imovel" class="btn btn-primary"/>
        </form>
    </div>
@endsection
