<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>
    <form>
        <form action="confirm.php" method="POST">
        <div class="form_group">
                <label for="name">名前:</label>
                <input type="text" id="name" name="name">
        </div>
        <div class="form_group">
            <label for="age">年齢:</label>
            <input type="number" id="age" name="age">
        </div>
        <div class="form_group">
            <label for="phone">電話番号:</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div class="form_group">
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form_group">
            <label for="address">住所:</label>
            <input type="text" id="address" name="address">
        </div>
        <div class="form_group">
            <label for="question">質問:</label>
            <textarea id="question" name="question" rows="4" cols="50"></textarea>
        </div>
        <div class="form_group">
            <label for="gender">性別:</label>
            <select id="gender" name="gender">
                <option values="male">男性</option>
                <option values="female">女性</option>
                <option values="other">その他・答えたくない</option>
            </select>
        </div>
        <button type="submit">送信</button>
    </form>
</body>
</html>