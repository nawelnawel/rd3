<div>
 
  
@if ($isBtnEditClicked)

@include("livewire.modeles.edit")



@else
@if ($isBtnAddClicked)

@include("livewire.modeles.create")


@else

@include("livewire.modeles.liste")

@endif

@endif



</div>
