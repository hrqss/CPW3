<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primeira Pagina</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/brands.css" rel="stylesheet" type="text/css"/>
        <link href="css/solid.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontawesome.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="alert alert-dark" role="alert">
                A simple dark alert—check it out!
            </div>
            <h1>Pagina Web PHP</h1>
            <h3> Pagina Web</h3>
            <p>Mussum Ipsum, cacilds vidis litro abertis.<br>
                Quem manda na minha terra sou euzis!<br>
                Casamentiss faiz malandris se pirulitá.<br>
                Quem num gosta di mé, boa gentis num é. Tá <br>
                deprimidis, eu conheço uma cachacis que pode<br>
                alegrar sua vidis.</p>
            <a href="http://www.google.com.br" target="_blank">Google</a>
            <table border="1">
                <tr>
                    <td>X</td>
                    <td>O</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>O</td>
                    <td>X</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>O</td>
                    <td>X</td>
                    <td>X</td>
                </tr>
            </table>
            <form class="row">
                <label class="col-md-6">
                    Nome:
                    <input type="text" name="txtnome" class="form-control" />
                </label>
                <label class="col-md-6">
                    E-mail: 
                    <input type="email" name="txtemail" class="form-control"/>
                </label>
                <label class="col-md-4">
                    Estado:
                    <select name="cbestados" class="form-control">
                        <option value="">Selecione</option>
                        <option value="ms">MS</option>
                        <option value="sp">SP</option>
                        <option value="mg">MG</option>
                    </select>
                </label>
                <div class="col-md-4">
                    <div class="row">
                        <label class="col-md-12" >Sexo: </label> 
                        <label class="col-md-6">
                            <input type="radio" value="1" name="rdoSexo" class="form-check-input">
                            Masculino
                        </label>
                        <label class="col-md-6">
                            <input type="radio" value="2" name="rdoSexo" class="form-check-input">
                            Feminino
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <label class="col-md-12"> Hobby:</label> 
                    <label class="col-md-6">
                        <input type="checkbox" value="0" name="cbxHobby[]">
                        Nadar
                    </label>
                    <label class="col-md-6">
                        <input type="checkbox" value="1" name="cbxHobby[]">
                        Correr
                    </label>
                    <label class="col-md-6">
                        <input type="checkbox" value="2" name="cbxHobby[]">
                        Cantar
                    </label>
                </div>
                </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-success">
                            <i class="fas fa-camera"></i>
                            Enviar
                    </div>
            </form>
        </div>
    </body>
</html>
