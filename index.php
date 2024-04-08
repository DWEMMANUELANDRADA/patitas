<?php
//include "global/config.php";
include"carrito.php";
include"global/conexion.php";?>
<?php 
include "template/cabecera.php";?>
        <br>
        <div class="alert alert-success" >
          <?php echo ($mensaje."<br>".$prod."<br>".$valor."<br>".$cuantia);?>
         <a href="" class="badge badge-success btn btn-bdge">ver carrito</a>
        </div> <!--inicio main-->
        <div class="container">
        <div class="row">
           <div class="card">
            <img class="card-img-top" src="img/pexels-pixabay-45201.jpg" alt="">
            <div class="card-body">
               <div class="card-body">
                  <span><?php echo $producto['nombre'];?></span>
                  <h4 class="card-title">$<?php echo $producto['precio'];?> </h4>
                  <p class="card-text"><?php echo $producto['descripcion'];?></p>
                  <form action="" method="post">
                  <input type="hidden" name="id" id="id"value="<?php echo $producto['id'];?>"readonly>
                  <input type="hidden" name="nombre" id="nombre"value="<?php echo $producto['nombre'];?>"readonly>
                  <input type="hidden" name="precio" id="precio"value="<?php echo $producto['precio'];?>"readonly>
                  <input type="hidden" name="cantidad" id="cantidad"value="<?php echo 1;?>">
                  <button class="btn btn-primary"name="btn-accion"value="agregar"type="submit">Agregar al Carrito</button>
                 </form> 
                </div>
              <h4 class="card-title">Title</h4>
              <p class="card-text">Text</p>
            </div>
          </div>
          <?php
          $sentencia=$conn->prepare("SELECT * FROM `tbl-productos`");
          $sentencia->execute();
          $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          //print_r($listaProductos);
          ?>
          <?php
          foreach($listaProductos as $producto){?>
           <div class="col-3 ">
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="<?php echo $producto['imagen'] ; ?> "data-toggle="popover"
                data-trigger="hover"
                data-content="<?php echo $producto['descripcion'];?>"
                heigth="317px" width="150px">
                <div class="card-body">
                  <span><?php echo $producto['nombre'];?></span>
                  <h4 class="card-title">$<?php echo $producto['precio'];?> </h4>
                  <p class="card-text"><?php echo $producto['descripcion'];?></p>
                  <form action="" method="post">
                  <input type="hidden" name="id" id="id"value="<?php echo $producto['id'];?>"readonly>
                  <input type="hidden" name="nombre" id="nombre"value="<?php echo $producto['nombre'];?>"readonly>
                  <input type="hidden" name="precio" id="precio"value="<?php echo $producto['precio'];?>"readonly>
                  <input type="hidden" name="cantidad" id="cantidad"value="<?php echo 1;?>">
                  <button class="btn btn-primary"name="btn-accion"value="agregar"type="submit">Agregar al Carrito</button>
                 </form> 
                </div>
            </div>
          </div>
          <?php
          }?>
        
            </div>
            
              </div>




        </div>
          
         <!--fin main-->
     
  

   
    <!--JavaScript -->
    <script >
      $(function () {
  $('[data-toggle="popover"]').popover()
});
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
include"template/pie.php";
?>