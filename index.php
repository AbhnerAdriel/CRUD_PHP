<?php
    require 'config.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuario ORDER BY nome ASC");

    // Verifica se a consulta retornou algum resultado
    if ($sql->rowCount() > 0)
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC); // Retorna um array associativo
?>

<h1>Listagem de Usuários</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $usuario): ?>
        <tr>
            <td> <?php echo $usuario['id']; ?></td> <!-- Outra forma de exibir o valor da variável -->
            <td> <?=$usuario['nome']; ?></td>
            <td> <?=$usuario['email']; ?></td>
            <td>
                
                <a href="editar.php?id=<?=$usuario['id']; ?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id']; ?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar Usuário</a>