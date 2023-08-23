<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>
<form class="p-4" method="POST" action="regristar.php" enctype="multipart/form-data">
                       <div class="mb-3">
                           <label  class="form-label">Dato:</label>
                      <input type="text" name="dato" class="form-control" autofocus required>
                      </div>
                      <br>
                  <div class="mb-3">
                        <label  class="form-label">Informacion:</label>
                        <input type="text" class="form-control" name="informar" autofocus required>
                    </div>
                    <br>
                    <div class="mb-3">
                           <label  class="form-label">registro:</label>
                      <input type="text" name="registro" class="form-control" autofocus required>
                      </div>
                      <br>
                  <div class="mb-3">
                        <label  class="form-label">tabla:</label>
                        <input type="text" class="form-control" name="tabla" autofocus required>
                    </div>
                    <br>
                    <div class="mb-3">
                           <label  class="form-label">relacion:</label>
                      <input type="text" name="relacion" class="form-control" autofocus required>
                      </div>
                      <br>
                  <div class="mb-3">
                        <label  class="form-label">SQL:</label>
                        <input type="text" class="form-control" name="SQL" autofocus required>
                    </div>
                    <br>
                    <div class="mb-3">
                           <label  class="form-label">DDL:</label>
                      <input type="text" name="DDL" class="form-control" autofocus required>
                      </div>
                      <br>
                  <div class="mb-3">
                        <label  class="form-label">DML:</label>
                        <input type="text" class="form-control" name="DML" autofocus required>
                    </div>
                    <br>
                    <div class="mb-3">
                           <label  class="form-label">SGBD:</label>
                      <input type="text" name="SGBD" class="form-control" autofocus required>
                      </div>
                      <br>
                    <div class="mb-3">
                        <label  class="form-label">basededatos:</label>
                        <input type="text" class="form-control" name="basededatos" autofocus required>
                    </div>
                    <br>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                    </form>
</body>
</html>