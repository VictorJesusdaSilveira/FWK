<?php
$estado = $_GET['estado'] ?? '';
if(empty($estado)){
    print '<option value="">Selecione um estado primeiro...</option>';
    exit;
}

$cidadesPorEstado = [
    'SP' => ['São Paulo', 'Campinas', 'Santos', 'Ribeirão Preto'],
    'RJ' => ['Rio de Janeiro', 'Niterói', 'Petrópolis', 'Cabo Frio'],
    'PR' => ['Curitiba', 'Foz do iguaçu', 'Maringá', 'Londrina']
];

$listaCidades = $cidadesPorEstado[$estado] ?? [];

if(count($listaCidades) > 0){
    foreach ($listaCidades as $cidade){
        print '<option value="">' . $cidade . '">' . $cidade . '</option>';
    }
}


?>