<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<meta charset="utf-8">
<head>
    <title>Acceder</title>

    <!--JQUERY-->
    <script src="js/jquery-1.10.2.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    

    <script src="js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" id="login" name="login" method="get">
                    <div class="form-group">
                    	<label>Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" required />
                    </div>
                    <div class="form-group" >
                    	<label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contrasena" name="password" required />
                    </div>
                    <button type="submit" class="col-md-12 btn btn-primary login" id="login"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                  
                </div>
                <div th:if="${param.error}" id="error" style="display: none;"  class="alert alert-danger" role="alert">
		           Nombre de usuario y contraseña inválidos.
		        </div>
                <?php if(isset($_GET['session_destroy'])){?>
		        <div th:if="${param.logout}" id="logged"  class="alert alert-success" role="alert">
		            Usted ha sido desconectado.
		        </div>
            <?php } ?>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
  var _0xe258=["\x73\x65\x72\x69\x61\x6C\x69\x7A\x65","\x50\x4F\x53\x54","\x61\x6A\x61\x78\x2F\x61\x63\x63\x65\x73\x6F\x2E\x70\x68\x70","\x43\x61\x72\x67\x61\x6E\x64\x6F\x2E\x2E\x2E","\x68\x74\x6D\x6C","\x2E\x6C\x6F\x67\x69\x6E","\x3C\x69\x20\x63\x6C\x61\x73\x73\x3D\x27\x66\x61\x73\x20\x66\x61\x2D\x73\x69\x67\x6E\x2D\x69\x6E\x2D\x61\x6C\x74\x27\x3E\x3C\x2F\x69\x3E\x20\x20\x49\x6E\x67\x72\x65\x73\x61\x72","\x31","\x68\x72\x65\x66","\x69\x6E\x64\x65\x78\x5F\x70\x2E\x70\x68\x70","\x66\x61\x64\x65\x49\x6E","\x23\x65\x72\x72\x6F\x72","\x61\x6A\x61\x78","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x73\x75\x62\x6D\x69\x74","\x23\x6C\x6F\x67\x69\x6E"];$(_0xe258[15])[_0xe258[14]](function(_0xb03ex1){var _0xb03ex2=$(this)[_0xe258[0]]();$[_0xe258[12]]({type:_0xe258[1],url:_0xe258[2],data:_0xb03ex2,beforeSend:function(_0xb03ex3){$(_0xe258[5])[_0xe258[4]](_0xe258[3])},success:function(_0xb03ex4){$(_0xe258[5])[_0xe258[4]](_0xe258[6]);if(_0xb03ex4== _0xe258[7]){location[_0xe258[8]]= _0xe258[9]}else {$(_0xe258[11])[_0xe258[10]]()}}});_0xb03ex1[_0xe258[13]]()})
</script>
</html>
