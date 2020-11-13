<div >
    @if (session()->has('message'))
        <div class="alert alert-success col-6">
          {{ session('message') }}
        </div>
    @endif

        @foreach ($choices as $choice)
        <ul class="list-group list-group-flush col-6">
            <li class="list-group-item">{{ $choice->choice_txt }}</li>
          </ul>
        @endforeach

     

    <form>
        <div class=" add-input">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter choice" wire:model="choice_txt.0">
                        @error('choice_txt.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                {{-- {{ $choice_txt }} --}}
                {{-- <input type="hidden" wire:model="question_id.0">
                @error('question_id.0') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                {{-- <div class="col-md-5">
                    <div class="form-group">
                        <input type="number" class="form-control" wire:model="question_id.0"  placeholder="Enter Email">
                        @error('question_id.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div> --}}
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
                </div>
            </div>
        </div>

        @foreach($inputs as $key => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Choice" wire:model="choice_txt.{{ $value }}">
                            @error('choice_txt.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    {{-- <input type="hidden" wire:model="question_id.{{ $value }}">
                    @error('question_id.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror --}}
                    {{-- <div class="col-md-5">
                        <div class="form-group">
                        <input type="number" class="form-control" wire:model="question_id.{{ $value }}"  placeholder="Enter Email">
                            @error('question_id.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div> --}}
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-12">
                <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Save</button>
            </div>
        </div>
    </form>
</div>