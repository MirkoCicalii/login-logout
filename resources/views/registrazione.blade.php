<!DOCTYPE html>
<html style="background-color:cornflowerblue;">
    <head>
        <title>Registrazione</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>

<style>
html,body {
    padding: 0;
    margin: 0;
    font: 14px 'Open sans', sans-serif;
    color: #333;
}
h2{
    text-align: center ;
}
h1 {
    margin: 0;
    margin-bottom: 20px;
	font-size: 24px;
}
.formaccesso {
    padding: 40px;
    background: #DDD;
    border: 4px solid #AAA;
    width: 360px;
    margin: 30px auto;
}
input {
	font: 14px 'Open Sans', sans-serif;
    border: 2px solid #ccc;
    padding: 6px;
    display: block;
	margin-bottom: 10px;
    width: 96%;
}
button {
    font: 14px 'Open Sans', sans-serif;
    background-color: #4285f4;
    color: white;
    padding: 6px;
    cursor: pointer;
    border: none;
    margin-top: 10px;
	text-transform: uppercase;
}
</style>
        <form method="post" action="/php/register.php" class="formaccesso">
            <h1>Registrazione</h1>
            <input type="text" id="Nome" placeholder="Nome" name="Nome" maxlength="50" required>
            <input type="text" id="Cognome" placeholder="Cognome" name="Cognome" required>
            <input type="email" id="email" placeholder="Email" name="email" required>
            <input type="tel" id="n_cellulare" placeholder="Numero cellulare" name="numero cellulare" required>
            <button type="submit" name="register">Registrati</button>
        </form>
    </body>
</html>