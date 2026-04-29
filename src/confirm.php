<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>form_checklist</title>
</head>
<body>
    <h1>入力内容の確認</h1>
    <?php
    if($_SERVER["REQUEST_METHOD" == "POST"]) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $question = $_POST["question"];
        $gender = $_POST["gender"];

        if(!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z 　]+$/u", $name)) {
            echo "<p>お名前はひらがな・カタカナ・漢字・英字のみをご使用ください。</p>";
        } elseif (!is_numeric($age) || $age < 0 || $age > 150) {
            echo "<p>ご年齢は0から150の間でご入力ください。</p>";
        } elseif (!preg_match("/^[0-9-]+$/", $phone)) {
            echo "<p>ご連絡先は半角数字とハイフン(半角)のみ使用可能です。</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>メールアドレスの形式が正しくありません。</p>";
        } elseif (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z 　]+$/u", $address)) {
            echo "<p>住所はひらがな・カタカナ・漢字・英字のみをご使用ください。</p>";
        }
    } else {
        echo "<p>お名前:" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>ご年齢:" . htmlspecialchars($age, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>ご連絡先:" . htmlspecialchars($phone, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>メールアドレス:" . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>ご住所:" . htmlspecialchars($address, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>ご質問:" . htmlspecialchars($question, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>性別" . htmlspecialchars($gender, ENT_QUOTES, "UTF-8") . "</p>";
    } else {
        echo "<p>データが送信されていません。</p>";
    }
    ?>
</body>