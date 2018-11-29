<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Crear venta
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear venta</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

        <div class="col-md-6 col-xs-12">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-xs-12 col-sm-4" style="padding-right:0px">
                  <div class="form-group">
                    <div class="input-group">
                      Tipo de Factura
                      <select class="form-control" id="tipoFactura" name="tipoFactura" required>
                        <option value="">Seleccione Tipo de factura</option>
                        <option value="contado">Contado</option>
                        <option value="credito">Crédito</option>              
                      </select>    

                    </div>
                  </div>
                </div>
                <!-- /. col-xs-6 -->

                <div class="col-xs-12 col-sm-4" style="padding-right:0px" >
                  <div class="form-group">
                  N° Transacción 
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-list-ol"></i></span> 

                      <input type="text" class="form-control" id="nuevoTransaccion" value="00000001" readonly>

                    </div>

                  </div> 

                </div>
                <!-- /. col-xs-6 --> 

                <div class="col-xs-12 col-sm-4" style="padding-right:0px">
        
                  <div class="form-group">
                   N° Factura
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                      <input type="text" class="form-control" id="nuevoDocumento" value="00000001" readonly>

                    </div>

                  </div> 

                </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>



     <!-- /. Total Venta-->
      <div class="col-md-6 hidden-xs hidden-sm">

        <div class="small-box bg-aqua">
          
          <div class="inner">
            
            <h3>$<?php echo number_format('60000000',2); ?></h3>

          </div>
          
          <div class="icon">
            
            <i class="ion ion-social-usd"></i>
          
          </div>
          
          <a href="ventas" class="small-box-footer">
            
          Total Factura <i class="ion ion-social-usd"></i>
          
          </a>

        </div>

      </div>
      <!-- /. col-sm-4 hidden-xs -->
    </div> 

  </section>

</div>

