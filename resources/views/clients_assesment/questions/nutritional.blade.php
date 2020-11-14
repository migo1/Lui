<form class="ml-4">
    <div class="form-group">
    <h5>{{ $nutritional->text }}</h5>
    </div>
    @php
        $i = 0 ;
    @endphp
    @foreach ($nutritional->choices as $choice)

      <span><p>{{ ++$i }} . {{ $choice->choice_txt }} <input class="ml-3" type="text" name="" id=""></p> </span> <br> 
  
    @endforeach
  
  </form>