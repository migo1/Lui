<form class="ml-4">
    <div class="form-group">
    <h5 >{{ $prior->text }}</h5>
    </div>
    @foreach ($prior->choices as $choice)
    <div class="form-check">
      <label class="form-check-label">
      <input class="form-check-input" type="checkbox" value="{{ $choice->id }}">
         {{ $choice->choice_txt }}
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
      </label>
  </div>
    @endforeach
  
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
  </form>