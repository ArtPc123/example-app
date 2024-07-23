@extends('website.index')

@section('conteudo')
<?php include 'header1.php'; ?>
		<table>
			<tr>
				<th>ID do item</th>
				<th>Nome do itemm</th>
				<th>código do item</th>
				<th>Quantidade disponivel</th>
                <th>Ultima pessoa a retirar</th>
                <th>UQuantidade retirada</th>
				<th>Editar</th>
				<th>Remover</th>
			</tr>
<?php while ($linha = $resultado->fetch_assoc()): ?>
			<tr>
				<td><?php echo $linha['']; ?></td>
				<td><?php echo $linha['']; ?></td>
				<td><?php echo $linha['']; ?></td>
				<td><?php echo $linha['']; ?></td>
                <td><?php echo $linha['']; ?></td>
                <td><?php echo $linha['']; ?></td>
				<td><a href = "_edita.php?id=<?php echo $linha['id']; ?>">Editar</a></td>
				<td><a href = "_remover.php?id=<?php echo $linha['id']; ?>">remover</a></td>
			</tr>
<?php endwhile; ?>
</table>
<?php include 'footer.php'?>
@endsection

@push ('css')
		<link rel='Stylesheet' href='css/app.css'>
@endpush