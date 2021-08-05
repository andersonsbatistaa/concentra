<?php
if(isset($_POST["query"]))
{	
	require 'conexao.php';
	
	$query = addslashes($_POST["query"]);
	$sql = "SELECT COUNT(*) FROM processos WHERE 
				lotacao LIKE '%".$query."%'
				OR equipe LIKE '%".$query."%' 
				OR objeto LIKE '%".$query."%' 
				OR processo LIKE '%".$query."%'
				OR obs LIKE '%".$query."%'
				OR prazo LIKE '%".$query."%' 
			";
	$sql = $pdo->prepare($sql);
	$sql->execute();

	if ($sql->fetchColumn() > 0):	
		$sql = "SELECT * FROM processos WHERE 
					lotacao LIKE '%".$query."%'
					OR equipe LIKE '%".$query."%' 
					OR objeto LIKE '%".$query."%' 
					OR processo LIKE '%".$query."%'
					OR obs LIKE '%".$query."%'
					OR prazo LIKE '%".$query."%' LIMIT 100
				";
		$sql = $pdo->prepare($sql);
		$sql->execute();
?>
<div class="table-responsive">
	<table class="table table-borderless table-hover">
		<thead class="thead-primary">
			<tr>
				<th scope="col">Qnt.</th>
				<th scope="col">Lotação</th>
				<th scope="col">Equipe</th>
				<th scope="col">Objeto</th>
				<th scope="col">Processo SEI</th>
				<th scope="col">Observação</th>
				<th scope="col">Prazo</th>
			</tr>
		</thead>
		<?php	
			$i = 0;
			while($row = $sql -> fetch(PDO::FETCH_ASSOC)):
			//var_dump($row);
			$i++;
		?>
		<tbody>		
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row["lotacao"];?></td>
				<td><a href="" onclick="window.open('processos.php?pg=<?php echo $row['page'];?>')">
					<?php echo $row["equipe"];?>
				</a></td>
				<td><?php echo $row["objeto"];?></td>
				<td><a href="" onclick="window.open('https://sei.inss.gov.br/sei/controlador.php?acao=procedimento_trabalhar&id_procedimento=<?php echo $row["idproc"];?>')">
					<?php echo $row["processo"];?>
				</a></td>
				<td><?php echo $row["obs"];?></td>

				<?php if(isset($row["prazo"]) && $row["prazo"] != ""): ?>
					<td><?php echo date("d/m/Y", strtotime($row["prazo"]));?></td>
				<?php else: ?>
					<td><?php echo $row["prazo"] = "";?></td>
				<?php endif ?>				
			</tr>
		</tbody>
		<?php 
			endwhile;
		?>
	</table>
</div>
<?php else: ?>
	<h5 style="color: red; text-align: center;">
		A busca não restornou resultado!
	</h5>
<?php endif; } ?>

<!--PRINTAR DADODS
//pre_r($sql); recebe o resultado da requisição
pre_r($sql->fetch_assoc());
function pre_r($sql){
	echo '<prev>';
		print_r($sql);
	echo '</prev>';
}
-->