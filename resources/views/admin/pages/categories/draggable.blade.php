<div class="edit-control form-inline ordered t-2 rounded bg-light hover-shadow-light mb-2" 
  id="{{$category->id}}"
  data-name="{{$category->name}}"
  data-subtitle="{{$category->subtitle}}"
  data-description="{{$category->description}}"
  data-name_pt="{{$category->name_pt}}"
  data-subtitle_pt="{{$category->subtitle_pt}}"
  data-description_pt="{{$category->description_pt}}"
  data-path="{{route('admin.categories.update', $category->id)}}">

  {{-- SORT HANDLE --}}
  <div class="px-3 py-1 sort-handle cursor-pointer">
    <i class="fas fa-sort"></i>
  </div>
  {{-- INPUTS --}}
  <div class="flex-grow-2 p-1">
    <input type="hidden" name="sorting_order" data-id="{{$category->id}}" value="{{$category->sorting_order}}">
    <p class="my-1">{{$category->name}}</p>
  </div>
  {{-- ACTION BUTTONS --}}
  <div class="text-right px-1 py-1">
    <span class="badge cursor-pointer text-warning open-edit-modal"
      data-toggle="modal"      
      data-target="#edit-modal">Edit</span>
    
    <i class="fas text-danger fa-trash-alt mx-2 cursor-pointer delete" 
      data-path="/admin/categories/{{$category->id}}" 
      data-toggle="modal" 
      data-target="#delete-confirm"></i>
  </div>
</div>
