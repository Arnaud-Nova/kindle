<?php 

$books = [
    'escarboucle_bleue' => [
        'titre' => "L'escarboucle bleue",
        'auteur' => "Arthur Conan Doyle",
        'annee' => '1982'
    ],
    'etude_en_rouge' => [
        'titre' => "une étude en rouge",
        'auteur' => "Arthur Conan Doyle",
        'annee' => '1887'
    ],
    'gentilhomme_celibataire' => [
        'titre' => "Le gentilhomme célibataire",
        'auteur' => "Arthur Conan Doyle",
        'annee' => '1892'
    ],
    'le_chien_des_baskerville' => [
        'titre' => "Le chien des baskerville",
        'auteur' => "Arthur Conan Doyle",
        'annee' => '1902'
    ],
    'le_signe_des_quatre' => [
        'titre' => "Le signe des quatre",
        'auteur' => "Arthur Conan Doyle",
        'annee' => '1890'
    ],
    'un_scandale_en_boheme' => [
        'titre' => "Un scandale en Bohême",
        'auteur' => "Arthur Conan Doyle",
        'annee' => '1891'
    ],
];

if (isset($_GET['book'])) {
    include 'livres/' . $_GET['book'] . '.php';
} else {
foreach ($books as $book => $datas) : ?>

    <form method="get">
            <button name="book" value="<?= $book; ?>">
                <img src="images/<?= $book; ?>.jpg" class="picture">
                <a class="listpicture"><title class="listpicture"><?= $datas['titre'] . '</title> - <cite class="listpicture">' . $datas['auteur'] . '</cite> <span class="listpicture">' . $datas['annee']; ?></span></a>
            </button>
    </form>
<?php
endforeach;
echo '<div id="toggle" class="picturemode">Changer de vue</div>';
}