<!DOCTYPE html>
<html>
<head>
    <title>Eposta bildirimi</title>
    <style>
        h1 {
           text-align: center;
           margin-top:10px
        }
    </style>
</head>
<body>
    <h1>Yeni İletişim Mesajı</h1>
    <p><strong>İsim:</strong> {{ $contact->name }}</p>
    <p><strong>E-posta:</strong> {{ $contact->email }}</p>
    <p><strong>Telefon:</strong> {{ $contact->phone }}</p>
    <p><strong>Mesaj:</strong> {{ $contact->message }}</p>
</body>
</html>
