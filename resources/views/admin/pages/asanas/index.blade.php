@extends('admin/layouts/app')

@section('content')

@include('admin/components/page-title', [
  'title' => 'Asana Poses',
  'subtitle' => "Showing {$asanas->firstItem()}-{$asanas->lastItem()} of a total of {$asanas->total()} asanas"
])

<div class="row">
  {{-- PLUS --}}
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
    @include('admin/components/plus-card')
  </div>
  {{-- CARDS --}}
  @foreach($asanas as $asana)
    @include('admin/components/cards/asana')
  @endforeach
</div>
{{-- PAGINATION --}}
<div class="row mt-4">
    <div class="d-flex align-items-center w-100 justify-content-center my-4">
    {{ $asanas->links() }}    
    </div>
</div>

@include('admin/pages/asanas/add/modal')

@component('admin/components/modals/delete', ['title' => 'Delete asana'])
Are you sure you want to delete this asana?
@endcomponent

@endsection

@section('scripts')
<script src="{{asset('js/upload.image.js')}}"></script>
<script src="{{asset('js/modal.delete.js')}}"></script>
<script src="{{asset('js/edit.inputs.js')}}"></script>

<script type="text/javascript">
checkName('asanas');
</script>

<script type="text/javascript">
$('a.add-new-field').on('click', function() {
  $button = $(this);
  $clone = $button.siblings('.original-type').clone();

  $clone.removeClass('original-type').insertBefore($button).addClass('d-flex');
});
</script>

<script type="text/javascript">
if($('.is-invalid').length > 0) {
  $('#add-modal').modal('show');
}
</script>

<script type="text/javascript">
$('.spinner-button').on('click', function() {
    updateButton(
      $(this), 
      disabled = true, 
      'Creating the asana, this may take a little while...');
});
</script>
@endsection