<form class="ml-4">
    <div class="form-group">
    <h5>{{ $general->text }}</h5>
    </div>
    @php
        $i = 0 ;
    @endphp
    @foreach ($general->choices as $choice)

        <p>{{ ++$i }} . {{ $choice->choice_txt }}</p>
    {{-- <div class="form-check">
      <label class="form-check-label">
      <input class="form-check-input" type="checkbox" value="{{ $choice->id }}">
         {{ $choice->choice_txt }}
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
      </label>
  </div> --}}
    @endforeach
  
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
  </form>