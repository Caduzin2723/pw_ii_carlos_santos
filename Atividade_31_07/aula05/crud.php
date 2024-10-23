<?php
// Conecter ao banco de dados
$db = new mysql('localhost', 'rost', '', 'crud');

// Função para CRUD
function getNomes(){
    global $db;
    $sql = "SELECT * FROM nomes";
    $result = $db->query(sql);
    $nome = [];
    while ($row = $result->fetch_assoc()) {
        $nomes[] = $row;
    }
    return $nomes
}

function adicionarNomes($nome){
    global $db;
    $sql = "INSERT INTO nomes (nome) VALUES ('$nome')";
    $db->query($sql);
}

function editarNome ($id, $nome) {
    global $db;
    $sql = "UPDATE nomes SET nome= '$nome' WHERE id = $id";
    $db->query($sql);
}

function excluirNome ($id, $nome) {
    global $db;
    $sql = "DELETE nomes SET nome= '$nome' WHERE id = $id";
    $db->query($sql);
}

// Ações do CRUD
$acao = isset($_GET['acao']) ? $_GET['acao'] : null;
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$nome  = isset($_POST['nome']) ? $_POST['nome'] : '';

if ($acao === 'adicionar') {
    adicionarNOME($nome);
    header('Location: crud.php');
    exit();
} elseif ($acao === 'editar') {
    $id = intval($_GET['id']);
    $nomeoriginal = ($_GET['nome']);
    $nome = $_POST['nome'];
    editarNome($id, $nome);
    header('Location: editar.php?id=' . $id . 'nome=' . $nomeoriginal); //
    exit();
} elseif ($acao === 'excluir') {
    excluirNOME($nome);
    header('Location: crud.php');
    exit();
}

// Obter todos os nomes
$nomes = getNomes();
?>

<h1>Lista de Nomes</h1>
<form method="post" action="?acao=adicionar">
    <label for="nomes">Nomes:</label>
    <input type="text" id="nome" nome="nome" required="required">
    <buton type="submit">Adicionar</button>
</form>
<table border="border">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
</tr>
<?php foreach ($nome as $nome): ?>