
<?php
class UserView {
    // Método para renderizar a página HTML com a lista de usuários
    public function render($users) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <!-- Define codificação e responsividade -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Lista de Usuários</title>
            <!-- Inclui Tailwind CSS via CDN para estilização -->
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <!-- Container principal estilizado com Tailwind -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-2xl">
                <!-- Título da página -->
                <h1 class="text-2xl font-bold mb-4 text-center">Lista de Usuários (Demo MVC)</h1>
                <!-- Tabela para exibir os usuários -->
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">ID</th>
                            <th class="border p-2">Nome</th>
                            <th class="border p-2">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop para exibir cada usuário -->
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <!-- Exibe os dados do usuário com proteção contra XSS -->
                                <td class="border p-2"><?php echo htmlspecialchars($user['id']); ?></td>
                                <td class="border p-2"><?php echo htmlspecialchars($user['name']); ?></td>
                                <td class="border p-2"><?php echo htmlspecialchars($user['email']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </body>
        </html>
        <?php
    }
}