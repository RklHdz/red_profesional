          
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <style type="text/css">
          
          select option{
            color: #C0BFBF;
          }
            select:hover {
             color:  #000000;
            }
          label{
            font-size: 15px;
          }
          </style>
          <style type="text/css">
            .modal-header {
                background: rgb(51,122,183);
                }
                .btn-group-lg > .btn, .btn-lg {
                      
                      font-size: 13px;
                      border-radius: 6px;
                  }
          </style>
          <script type="text/javascript">
            $(document).ready(function(){
                var con=0;
              $("#btn2").click(function(){
                con++;console.log(con);
                $("ol").append("<li "+con+">"+
                  " <input type='text'class='form-control' id="+con+" name="+con+" class='form-control'> "+
                  "<input type='button' class='btn btn-danger borrar' value='Eliminar'  />"+
                  "</li>");
                 document.getElementsByName("num")[0].value = con;
                });
               

            $(function () {
                    $(document).on('click', '.borrar', function (event) {
                        event.preventDefault();
                        $(this).closest('li').remove();
                        con--;
                        document.getElementsByName("num")[0].value = con;
                    });
                });
            });
            function get_hora(){
              var f = new Date();
              cad=f.getHours()+":"+f.getMinutes();
              document.getElementsByName("verificacion")[0].value = cad;
            }

             function get_fecha(){
              var f = new Date();
              cad=f.getDate()+"/"+f.getMonth()+"/"+f.getFullYear();
              document.getElementsByName("verificaciondate")[0].value = cad;
            }
        </script>

        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>DATOS DE LA OFERTA</h4>
              <form action=" <?php echo base_url()?>oferta_controller/captura_oferta " class="form-horizontal style-form" method="POST">
                <!--insert-->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre del representante</label>
                    <div class="col-sm-3">
                    <input type="text" name="nombre" class="form-control">
                  </div>
                  <label class="col-sm-1 control-label">Telefono</label>
                  <div class="col-sm-2">
                    <input type="tel" name="telefono" autocomplete="off" class="form-control"  autofocus="off" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" value="503-" placeholder="xxxx-xxxx">
                    <span>xxx-xxxx-xxxx</span>
                  </div>
                </div>
                <!--fin insert-->

                <!--insert-->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Direccion</label>
                  <div class="col-sm-4">
                    <input type="text" name="direccion" class="form-control">
                  </div>
                   <label class="col-sm-2 control-label">Nombre de la empresa</label>
                    <div class="col-sm-3">
                    <input type="text" name="empresa" class="form-control">
                  </div>
                  </div>
                <!--fin insert-->

                <!--insert descripcion-->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Descripcion de la oferta</label>
                  <div class="col-sm-5">
                    <textarea name="descripcion" class="form-control"  style="width: 500px; height: 150px; resize: none;"></textarea>
                  </div>
                </div>
                <!--fin insert-->

                 <!--insert seleccion de la pasantia-->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tipo de la oferta</label>
                  <div class="col-sm-3">
                   <select  name="tipo_oferta" id="" class="form-control">
                    <option  value="">Elija una opción</option>
                     <option value="Laboral">Laboral</option>
                     <option value="Pasantia">Pasantia</option>
                   </select>
                  </div>

                  <label class="col-sm-2 control-label">Tipo de notificacion</label>
                  <div class="col-sm-3">
                   <select  name="tipo_notificacion" id="" class="form-control">
                    <option  value="">Elija una opción</option>
                     <option value="Participante">Participante</option>
                     <option value="Administrativos">Administrativos</option>
                   </select>
                  </div>
                </div>
                <!--fin insert-->
                  
                  <input type="hidden" name="verificacion">
                  <input type="hidden" name="verificaciondate">
                  <input type="hidden" name="notificacion" value="no leido">
                  <input type="hidden" name="num" >
                  

               

               <!--insert modal-->
               <!-- <div class="container">-->
                <!-- Trigger the modal with a button -->

                <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Agregar requerimiento</button>-->

             <!-- Modal -->
              <!--  <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">-->
                  
                    <!-- Modal content-->
                    <!--<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">agregar requerimiento</h4>
                      </div>
                      <button type="button" class="btn btn-info btn-lg" id="btn2" >Agregar</button>
                      <div class="modal-body" id="aqui">
                        
                       <ol>
                         
                         
                        </ol>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="get_hora(); get_fecha()">Guardar</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
                
              </div>-->

               <!--fin modal-->

                <!--insert-->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Requerimiento</label>
                  <div class="col-sm-4">
                   <button type="button" class="btn btn-info btn-lg" id="btn2" onclick="get_hora(); get_fecha()" >Agregar</button>
                      <div class="modal-body" id="aqui">
                        
                       <ol>
                         
                         
                        </ol>
                      </div>
                  </div>
                  </div>
                <!--fin insert-->

                 <!--insert-->
                <div class="form-group">
                
                  <div class="col-sm-9" align="right">
                    <input type="submit" name="btnGuardar" class="btn btn-success">
                  </div>
                  </div>
                <!--fin insert-->
              </form>
            </div>
          </div>
        </div>