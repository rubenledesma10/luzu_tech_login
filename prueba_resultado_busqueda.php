<div class="container">
<h3 style="color: #dc3545">Resultados encontrados: <?php echo $num_fila ?></h3>
    <table class="table table-bordered border-danger">
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($fila = mysqli_fetch_array ($resultados, MYSQLI_ASSOC)){ ?>
                <tr>
                    <td><?php echo $fila ['categoria']; ?></td>
                    <td><?php echo $fila ['marca']; ?></td>
                    <td><?php echo $fila ['nombre']; ?></td>
                    <td><?php echo $fila ['descripcion']; ?></td>
                    <td><?php echo "$" . $fila ['precio']; ?></td>
                </tr>
            <?php } ?>    
        </tbody>
    </table>
</div>


------------------

<div class="container">

    <table class="table table-bordered border-danger">
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            if ($num_fila>0){
                echo "<div class='container'><table class='table table-bordered border-danger'>"
                echo "<h3 style='color: #dc3545'>Resultados encontrados: $num_fila</h3>";
                while ($fila = mysqli_fetch_array ($resultados, MYSQLI_ASSOC)){
                   
                    echo "<tr><td> $fila[categoria] </td>";
                    echo "<td> $fila[marca] </td>";
                    echo "<td> $fila[nombre] </td>";
                    echo "<td> $fila[descripcion] </td>";
                    echo "<td> $fila[precio] </td></tr>";
                }
            } else {
                echo "<h3 style='color: #dc3545'>No se han encontrado resultados</h3>";
            }

             ?>            
        </tbody>
    </table>
</div>

