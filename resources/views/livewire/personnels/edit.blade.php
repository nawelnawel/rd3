<div class="row p-4 pt-5">

       <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Formulaire d'edition  utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="updatePersonnel()">
       <div class="card-body">
                  
                  <div class="form-group">
                    <label >MATRICULE</label>
                    <input type="text"  wire:model="editPersonnel.matricule"  placeholder="matricule paie"class="form-control  @error('editPersonnel.matricule') is invalide @enderror">
                        @error("editPersonnel.matricule")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror 
                  </div>

                  <div class="d-flex">
                  

                     <div class="form-group flex-grow-1 mr-2">
                        <label >Nom</label>
                        <input type="text" wire:model="editPersonnel.nom" class="form-control @error('editPersonnel.nom') is invalide @enderror">
                        @error("editPersonnel.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>


                   <div class="form-group flex-grow-1">
                         <label >Prenom</label>
                         <input type="text" wire:model="editPersonnel.prenom" class="form-control @error('editPersonnel.prenom') is invalide @enderror">
                        @error("editPersonnel.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                   </div>
                  
                <div class ="form-group">
                  <label for="exampleSelectRounded0">Structure</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editPersonnel.structure_id'>
                               @foreach ($structures as $structure)
                    <option value="{{$structure->id}}">{{$structure->nom_struct}}</option>  
                    @endforeach
                  </select>
           </div>
                  
                    
                  <div class="form-group">
                    <label >Numero bureau</label>
                    <input type="text"  wire:model="editPersonnel.num_bureau"  placeholder="Numero bureau"class="form-control  @error('editPersonnel.num_bureau') is invalide @enderror">
                        @error("editPersonnel.num_bureau")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror 
                  </div>
                 
                 

                     <div class="form-group  ">
                    <label >Adresse E-mail (facultatif)</label>
                    <input type="text" wire:model="editPersonnel.email" class="form-control @error('editPersonnel.email') is invalide @enderror">
                        @error("editPersonnel.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
    

                  
                  
                 
                 
                </div>
                <!-- /.card-body -->

                 
              _
    
                   
                   
                
                   
              
             

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Appliquer les modification</button>
                   <button type="button" wire:click="goToListPersonnel()" class="btn btn-danger">liste des utilisateur</button>
                </div>
              </form>
            </div>
        </div>
      


   
          
         </div>
      </div>
    </div>
  </div>  
