<div class="row p-4 pt-5">
          <div class="col-10">
            <div class="card">
              
              <div class="card-header bg-primary">
                <h3 class="card-title"><i class="fas"></i>Liste des Modeles </h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent='goToAddModel()' ><i class="fa fa-plus"></i>Nouveau modele </a>
                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="width:10%;">ID</th>
                      <th style="width:30%;">Designation</th>
                     
                      <th style="width:25%;" class="text-center">Ajouté </th>
        
                      <th style="width:15%;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($modeles as $modele )
                     
                   
                    <tr>
                      <td>{{$modele->id}}</td>
                      <td>{{$modele->nom}}</td>
                    
                      <td class="text-center"><span class="tag tag-success">{{ $modele->created_at->diffForHumans()}}</span></td>
                      <td class="text-center"> 
                      <button class="btn btn-link" wire:click.prevent='goToEditModel({{$modele->id}})'><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link" wire:click="confirmDelete('{{$modele->nom}}','{{$modele->id}}')"><i class="far fa-trash-alt"></i></button>
                      </td>
                      
                    </tr>
                   @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class ="card-footer">
                 <div class="float-right"> 
                {{ $modeles->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->
             </div>
            <!-- /.card -->
          </div>
  


</div>

  <script>
  window.addEventListener("showConfirmMessage",event=>{
     Swal.fire({
  title: event.detail.message.title,
  text: event.detail.message.text,
  icon: event.detail.message.type,
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Continuer',
   cancelButtonText: 'Annuler',
}).then((result) => {
  if (result.isConfirmed) {
    @this.deleteM(event.detail.message.data.modelid)
  }
})
  })
   
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:event.detail.message,
          showConfirmButton:false,
          timer:3500
      })
  })
  
  
  </script>
  