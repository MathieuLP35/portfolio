<?php

require "include/core/bdd.php"; 

$limit = 3;
$query = "SELECT count(*) FROM recommandation";

$s = $db->query($query);
$total_results = $s->fetchColumn();
$total_pages = ceil($total_results/$limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}

$starting_limit = ($page-1)*$limit;
$show  = "SELECT * FROM recommandation ORDER BY id_recommandation DESC LIMIT $starting_limit, $limit";

$r = $db->prepare($show);
$r->execute([$starting_limit, $limit]);

while($res = $r->fetch(PDO::FETCH_ASSOC))
{
    $date = new DateTime($data["recommandation_Date"]);
?>
    <tr class="d-flex flex-column">
    <td class="my-3 bg-secondary">
        <div class="media border p-3">
        <img src="img/img_avatar3.png" class="mr-3 mt-1 rounded-circle" style="width:60px;">
        <div class="media-body">
            <h4><?php echo $res['recommandation_Name'];?><small><i><?php echo _RPOSTLE, $date->format('d/m/Y');?></i></small></h4>
            <p><?php echo $res['recommandation_Desc'];?></p>      
        </div>
        </div>
    </td>
    </tr>


<?php } 

$pageAcctuel = $page;
$pageSuivante = $pageAcctuel+1;;
$pagePrecedente = $pageAcctuel-1;

?>
