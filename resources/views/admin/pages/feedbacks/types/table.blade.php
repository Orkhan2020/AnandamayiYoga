<div>
  <div class="d-flex justify-content-between px-2">
    <div class="d-flex">
      <div class="mr-2" style="width: 126px">
        <span><strong>Rating</strong></span>
      </div>
      @if($currentType == 'experience')
      <div style="width: 168px">
        <span><strong>Page</strong></span>
      </div>
      @endif
      <div style="width: 168px">
        <span><strong>Comment</strong></span>
      </div>
      <div>
        <span><strong>From</strong></span>
      </div>
    </div>
    <div>
      <span><strong>Created on</strong></span>
    </div>
  </div>

  @foreach($feedbacks as $feedback)
  <a href="{{route('admin.feedbacks.show', $feedback->id)}}" class="link-none">
    <div class="d-flex justify-content-between border-bottom cursor-pointer hover-background-light">
      <div class="d-flex">
        <div class="p-2 d-flex align-items-center mr-2" style="width: 126px">
          @include('components/icons/stars', [
            'score' => $feedback->score,
            'size' => 'sm',
            'margin' => '1'])
        </div>
        @if($currentType == 'experience')
        <div class="p-2" style="width: 168px">
          <span class="clamp-1"><small>{{$feedback->page}}</small></span>
        </div>
        @endif
        <div class="p-2" style="width: 168px">
          <span class="clamp-1"><small>{{$feedback->comment ?? '-'}}</small></span>
        </div>
        <div class="p-2">
          <span><small>{{$feedback->email ?? '-'}}</small></span>
        </div>
      </div>
      <div class="p-2">
        <span><small>{{$feedback->created_at->toFormattedDateString()}}</small></span>
      </div>
    </div>
  </a>
  @endforeach

</div>