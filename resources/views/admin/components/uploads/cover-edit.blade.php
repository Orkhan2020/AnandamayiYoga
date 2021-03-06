<div class="form-group edit-control">
  <form method="POST" action="{{$path}}" enctype="multipart/form-data" id="upload-box">
    @csrf
    @method('PATCH')
    <input type="file" id="cover-input" name="cover" data-target="#cover" style="display:none;" />
    <div class="position-relative image-container">
      @include('admin.components.uploads.label', ['text' => 'COVER IMAGE', 'icon' => 'image'])
      <img class="w-100 border" id="cover" src="{{cloud($cover)}}" alt="Not an image">
      @manager
      <div class="controls text-center">
        <div class="d-flex justify-content-center align-items-center">
          <button type="button" id="upload-cover-button" class="btn-link text-blue cursor-pointer border-0 px-4">
            <i class="fas fa-folder-open"></i>
            <div class="text-muted"><small>Select</small></div>
          </button>
          <button type="submit" id="submit-cover-file" disabled class="btn-link text-blue cursor-pointer border-0 px-4 block-screen-button">
            <i class="fas fa-cloud-upload-alt"></i>
            <div class="text-muted"><small>Upload</small></div>
          </button>
        </div>
      </div>
      @endmanager
    </div>
  </form>

</div>