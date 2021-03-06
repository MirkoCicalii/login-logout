<!DOCTYPE html>
<html style="background-color:cornflowerblue;">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="example-app/resources/css/app.css">
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

        <form method="get" action="/home" class="formaccesso">
            <h1>Login</h1>
            <input type="text" id="username" placeholder="Username" name="username" >
            <input type="password" id="password" placeholder="Password" name="password">
            <button type="submit" name="login">Accedi</button>
            <a href ="/registrazione"><button name="login" type="button">Registrati</button></a>
            </form>
            
    </body>
</html>
