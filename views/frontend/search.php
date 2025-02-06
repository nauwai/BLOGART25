<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
require_once '../../header.php';


$searchInput = htmlspecialchars($_POST["rechercheInput"], ENT_QUOTES, 'UTF-8');


$articlefilter = sql_select('ARTICLE', '*',
    "libTitrArt LIKE '%$searchInput%' OR 
             libChapoArt LIKE '%$searchInput%' OR 
             libAccrochArt LIKE '%$searchInput%' OR 
             parag1Art LIKE '%$searchInput%' OR 
             libSsTitr1Art LIKE '%$searchInput%' OR 
             parag2Art LIKE '%$searchInput%' OR 
             libSsTitr2Art LIKE '%$searchInput%' OR 
             parag3Art LIKE '%$searchInput%' OR 
             libConclArt LIKE '%$searchInput%'"
);


if (!empty($articlefilter)) {
foreach ($articlefilter

as $article) {
// Create excerpt (first non-empty text field)
$excerpt = $article['libChapoArt'] ?:
    $article['libAccrochArt'] ?:
        $article['parag1Art'] ?:
            $article['parag2Art'] ?:
                'Pas d\'extrait disponible';

$highlightedExcerpt = preg_replace("/($searchInput)/i", "<mark>$1</mark>", $excerpt);
?>

    <div class="card m-5">
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($article['libTitrArt']); ?></h5>
            <p class="card-text"><?php echo $highlightedExcerpt; ?></p>
        </div>
    </div>
    <?php
    }
    } else {
        ?>
        <div class="alert alert-info text-center" role="alert">
            Aucun article trouvé pour "<?php echo $searchInput; ?>"
        </div>
        <?php
    }
include '../../footer.php'; ?>
