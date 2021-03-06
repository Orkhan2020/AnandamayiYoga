<div class="edit-control form-inline ordered t-2 rounded bg-light hover-shadow-light mb-2" 
  id="{{$subtype->id}}"
  data-name="{{$subtype->name}}"
  data-name_pt="{{$subtype->name_pt}}"
  data-path="{{route('admin.asanas.subtypes.update', $subtype->id)}}">

  {{-- SORT HANDLE --}}
  <div class="px-3 py-1 sort-handle cursor-pointer">
    <i class="fas fa-sort"></i>
  </div>
  {{-- INPUTS --}}
  <div class="flex-grow-2 p-1">
    <input type="hidden" name="order" data-id="{{$subtype->id}}" value="{{$subtype->order}}">
    <p class="my-1">{{$subtype->name}}</p>
  </div>
  {{-- ACTION BUTTONS --}}
  <div class="text-right px-1 py-1">
    <span class="badge cursor-pointer text-warning open-edit-modal"
      data-toggle="modal"      
      data-target="#edit-modal">Edit</span>
    
    <i class="fas text-danger fa-trash-alt mx-2 cursor-pointer delete" 
      data-path="/admin/asana-subtypes/{{$subtype->id}}" 
      data-toggle="modal" 
      data-target="#delete-confirm"></i>
  </div>
</div>
