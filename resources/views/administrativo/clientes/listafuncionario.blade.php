@extends('website.index')

@section('conteudo')
<?php include 'header1.php'; ?>
		<table>
			<tr>
				<th>ID do funcionário</th>
				<th>Nome</th>
				<th>Ultima entrada</th>
				<th>Ultima saída</th>
                <th>Produto(s) Retirado(s)</th>
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