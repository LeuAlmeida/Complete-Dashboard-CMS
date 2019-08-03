<?php
include_once 'config/conexao.php';

$page  = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$limit = 5;
$ini   = $page * $limit;                                     
$select  = "SELECT * FROM clientes limit $ini, $limit";
$result  = mysqli_query($conexao, $select);

while($exibe = mysqli_fetch_assoc($result)){
    echo '<td>' . utf8_encode(strtolower($exibe['id'])) .  '</td>' . "<br />";
}

$sql2 = "SELECT count(*) as count FROM registros";
$resultado = mysqli_query($conexao, $sql2); 
$row  = mysqli_fetch_assoc($resultado);
$total_registros = $row['count'];
$num_paginas     = ceil($total_registros / $limit);
?>
<div>
    <ul class="pagination pagination-sm pull-right">
        <li><a href="index.php?page=<?php echo $num_paginas -1?>" id="anterior"><<</a></li>
        <?php
            for($i = 1; $i <= $num_paginas; $i++){ ?>
                <li><a href="index.php?page=<?php echo $i - 1;?>"><?php echo $i;?></a></li>
        <?php }?>   
        <li><a href="index.php?page=0">>></a></li>
    </ul>
</div> 