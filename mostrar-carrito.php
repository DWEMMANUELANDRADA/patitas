<?php
include"global/config.php";
include"carrito.php";
include"template/cabecera.php";
?>
<br> 
<h3>Lista del Carrito</h3>
<table class="table table-ligth table-bordered">
    
    <tbody>
        <tr>
           <th width="40%">Descripcion</th>
           <th width="15%">Cantidad</th>
           <th width="20%">Precio</th>
           <th width="20%">Total</th>
           <th width="5%">...</th>
        </tr>
         <tr>
           <td width="40%">comida para perro</td>
           <td width="15%">5 und</td>
           <td width="20%">$300</td>
           <td width="20%">$500</td>
           <td width="5%"><button class="btn btn-danger">Eliminar</button></td>
           
        </tr>
          <tr>
           <td width="40%">comida para perro</td>
           <td width="15%">5 und</td>
           <td width="20%">$300</td>
           <td width="20%">$500</td>
           <td width="5%"><button class="btn btn-danger">Eliminar</button></td>
           
       
        </tr>
    </tbody>
</table>





<?php
include"template/pie.php";
?>