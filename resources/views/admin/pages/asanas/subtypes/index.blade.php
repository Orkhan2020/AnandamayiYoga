@extends('admin/layouts/app')

@section('content')

@include('admin/components/page-title', [
  'title' => 'Asana Sub Types',
  'subtitle' => 'Manage the sub types of asanas'
])

<div class="row">
	<div class="col-12">
		<button type="button" class="btn-bold btn-xs btn-red" data-toggle="modal" data-target="#add-modal"><i class="fas fa-plus mr-2"></i>Create a new sub type</button>
	</div>
</div>

<div class="row mt-4">
  <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" id="asanaSubTypes-list">
    @foreach($asanaSubtypes as $subtype)
      @draggable([
        'model' => $subtype, 
        'editPath' => route('admin.asanas.subtypes.update', $subtype->id), 
        'deletePath' => route('admin.asanas.subtypes.destroy', $subtype->id)])
    @endforeach
  </div>
</div>

@include('admin/pages/asanas/subtypes/modals/add')

@include('admin/pages/asanas/subtypes/modals/edit')

@component('admin/components/modals/delete', [
  'title' => 'Delete Sub Types'
])
Are you sure you want to delete this sub types?
@endcomponent

@endsection

@section('scripts')
<script src="{{asset('js/edit.inputs.js')}}"></script>
<script src="{{asset('js/modal.delete.js')}}"></script>
<script src="{{asset('js/sortable.js')}}"></script>

<script type="text/javascript">
$('.open-edit-modal').on('click', function() {
  $container = $(this).closest('.edit-control');
  $id = $container.attr('id');
  $path = $container.attr('data-path');

  $('#edit-modal .edit-control').each(function() {
    $group = $(this);
    $name = $group.attr('name');
    $value = $container.attr('data-'+$name);

    $('#edit-modal input[name="'+$name+'"], #edit-modal textarea[name="'+$name+'"]').val($value);

    $group.attr('id', $name+$id);
    $group.find('.edit').attr('data-id', $name+$id);
    $group.find('.save').attr('data-id', $name+$id).attr('data-path', $path);
  });

});
</script>
<script type="text/javascript">

autoSortable($('#asanaSubTypes-list'));

</script>
@endsection