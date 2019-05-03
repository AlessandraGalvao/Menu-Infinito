<?php
function exibe_filhos($id_categoria, $indent=''){
    global $conn;

    $tb = $conn->prepare("select * from categorias where id_pai=:pai");
    $tb->bindParam(":pai",$id_categoria, PDO::PARAM_INT);
    $tb->execute();

    while($l = $tb->fetch(PDO::FETCH_ASSOC)){
        echo "<option value='$l[id_categoria]'>$indent $l[nm_categoria]</option>";
        exibe_filhos($l["id_categoria"], $indent . $indent);
    }
}


function lista_filhos($id_categoria, $indent=''){
    global $conn;

    $tb = $conn->prepare("select * from categorias where id_pai=:pai");
    $tb->bindParam(":pai",$id_categoria, PDO::PARAM_INT);
    $tb->execute();

    while($l = $tb->fetch(PDO::FETCH_ASSOC)){
        echo "<li>$indent $l[nm_categoria]</li>";
        lista_filhos($l["id_categoria"], $indent . $indent);
    }
}
?>