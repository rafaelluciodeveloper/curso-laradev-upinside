@extends('property.master')
@section('content')
    <div class="container my-3">


        <h1>Listagem de Produtos</h1>
        <?php

        if (!empty($properties)) {
            echo "<table class='table table-striped table-hover'>";
            echo "<thead class='bg-primary text-white'>
                        <td>Titulo</td>
                        <td>Valor Locação</td>
                        <td>Valor Venda</td>
                        <td>Ações</td>
                   </thead>";

            foreach ($properties as $property) {

                $linkReadMode = url('/imoveis/' . $property->name);
                $linkEditMode = url('/imoveis/editar/' . $property->name);
                $linkRemoveMode = url('/imoveis/remover/' . $property->name);

                echo "<tr>
            <td>{$property->title}</td>
            <td>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
            <td>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
            <td><a href='{$linkReadMode}'>Ver Mais</a> | <a href='{$linkEditMode}'>Editar</a> | <a href='{$linkRemoveMode}'>Remover</a></td>
           </tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
@endsection

