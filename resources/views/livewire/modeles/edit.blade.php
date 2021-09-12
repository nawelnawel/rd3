<div class="row p-5 pt-6">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">METTRE A JOUR  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='updateM()'>

                <div class="card-body">
                  <div class="form-group">
                   <label for="exampleInputRounded0" >Designation </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='editModel.nom' @error('editModel.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('editModel.nom') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
                   
                      
                



                  

                 <br>
                 <br>
                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">MODIFIER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToList()'>ANNULER</button>
                       </div> 
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->

           
           

          </div>



</div>

 <script>
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:"MARQUE mis a jour avec  succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  