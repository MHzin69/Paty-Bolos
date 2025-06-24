<?php
$sabores = [
    ["nome" => "Fruta Abacaxi/Pessêgo", "preco" => 45.00, "ingredientes" => [
        "leite condensado", "creme de leite", "maisena", "leite", "abacaxi ou pêssego"
    ]],
    ["nome" => "BomBom", "preco" => 45.00, "ingredientes" => [
        "leite condensado", "creme de leite", "leite ninho", "leite", "maisena", "bombom"
    ]],
    ["nome" => "Creme de coco c/ abacaxi e doce de leite", "preco" => 45.00, "ingredientes" => [
        "leite condensado", "creme de leite", "maisena", "coco", "leite", "abacaxi", "leite condensado cozido"
    ]],
    ["nome" => "Creme de doce de leite com coco", "preco" => 45.00, "ingredientes" => [
        "leite condensado cozido", "leite", "coco", "maisena"
    ]],
    ["nome" => "Brigadeiro", "preco" => 47.00, "ingredientes" => [
        "chocolate", "leite condensado", "creme de leite", "manteiga"
    ]],
    ["nome" => "Prestígio", "preco" => 47.00, "ingredientes" => [
        "leite condensado", "creme de leite", "coco"
    ]],
    ["nome" => "Cremoso c/ abacaxi", "preco" => 50.00, "ingredientes" => [
        "leite condensado", "creme de leite", "leite", "leite ninho", "maisena", "abacaxi"
    ]],
    ["nome" => "Leite ninho c/ doce de leite", "preco" => 50.00, "ingredientes" => [
        "leite condensado", "creme de leite", "manteiga", "leite ninho", "leite condensado cozido"
    ]],
    ["nome" => "4 Leite", "preco" => 53.00, "ingredientes" => [
        "creme de leite", "leite condensado", "leite ninho", "emustab"
    ]],
    ["nome" => "Sensação", "preco" => 55.00, "ingredientes" => [
        "chantilly", "suco de morango", "leite condensado", "chocolate em barra", "morango"
    ]],
    ["nome" => "Leite ninho c/ Morango", "preco" => 60.00, "ingredientes" => [
        "margarina", "leite ninho", "leite condensado", "creme de leite", "morango"
    ]],
    ["nome" => "Floresta Branca c/ morango", "preco" => 60.00, "ingredientes" => [
        "chantilly", "leite condensado", "morango"
    ]],
    ["nome" => "Leite ninho c/ nutella e morango", "preco" => 75.00, "ingredientes" => [
        "leite condensado", "creme de leite", "manteiga", "leite ninho", "Nutella", "morango"
    ]],
];

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    foreach ($sabores as $sabor) {
        if ($sabor['nome'] === $nome) {
            echo implode(", ", $sabor['ingredientes']);
            exit;
        }
    }
    echo "Ingredientes não encontrados.";
}

$decoracoes = [
    1 => "images/imgBolos/deco01.jpg",
    2 => "images/imgBolos/deco02.jpg",
    3 => "images/imgBolos/deco03.jpg",
    4 => "images/imgBolos/deco04.jpg",
    5 => "images/imgBolos/deco05.jpg",
    6 => "images/imgBolos/deco06.jpg",
    7 => "images/imgBolos/deco07.jpg",
    8 => "images/imgBolos/deco08.jpg",
    9 => "images/imgBolos/deco09.jpg",
    10 => "images/imgBolos/deco10.jpg",
    11 => "images/imgBolos/deco11.jpg",
    12 => "images/imgBolos/deco12.jpg",
];
?>



