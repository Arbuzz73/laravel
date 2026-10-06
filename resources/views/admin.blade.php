<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
</head>
<body>

    <!-- Контент -->
    <main>
        <h2>Панель администратора</h2>
        
        <h3>Управление статьями</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Автор</th>
                <th>Действия</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Что нового в Laravel 11?</td>
                <td>Иван</td>
                <td>
                    <button>Ред.</button>
                    <button>Блок.</button>
                    <button>Удал.</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Основы Eloquent ORM</td>
                <td>Петр</td>
                <td>
                    <button>Ред.</button>
                    <button>Блок.</button>
                    <button>Удал.</button>
                </td>
            </tr>
        </table>

        <br><br>

        <h3>Роли пользователей</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Роль</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Администратор</td>
                <td>admin@mail.ru</td>
                <td>
                    <select>
                        <option>Admin</option>
                        <option>Journalist</option>
                        <option>Reader</option>
                    </select>
                </td>
            </tr>
        </table>
    </main>

    <hr>

</body>
</html>