

<div class="row">
    

          <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <p class="card-title"> <span style="font-size: 20px;" >HEALTH AND FITNESS
                    ASSESSMENT FORM QUESTIONS</span> 
                      @include('livewire.assess_quiz.create')
                       @include('livewire.assess_quiz.edit')
                      @include('livewire.assess_quiz.delete')
                      </P>
                </div>

                 @if(session()->has('message'))
                   <div class="alert alert-success" style="margin-top:30px;">x
                  {{ session('message') }}
                 </div>
                  @endif

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                      <th>No.</th>
                      <th>Question</th>
                     <th>Action</th>
                        </tr>
                    </thead>

                      <tbody>
                        <tr>
                          @foreach ($questions as $key =>$question)
                              
                         
                          {{-- <td>
                           {{++$i}}
                          </td> --}}

                          {{-- @php
                              $i = '';
                          @endphp --}}
                          <td>
                            
                            {{ ++$key }}
                       
                          </td>
                          <td>
                            <a href="{{ route('settings.show',  $question->id ) }}">
                            {{ $question->text }}
                          </a>
                          </td>
                    
                          <td class="text-right">
                <button data-toggle="modal" data-target="#updateModal"
                 wire:click="edit({{ $question->id }})" class="btn btn-primary btn-sm">Edit</button>

                <button data-toggle="modal" data-target="#deleteModal"
                wire:click="remove({{ $question->id }})" class="btn btn-danger btn-sm">Delete</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>



{{-- <div class="row">
    @include('livewire.assess_quiz.create')
    @include('livewire.assess_quiz.edit')
    @include('livewire.assess_quiz.delete')
    <br>
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $value)
            <tr>
                <td>{{ $value->id }}</td>
            <td><a href="{{ route('settings.show',  $value->id ) }}"> {{ $value->text }} </a></td>
                <td>
                <button data-toggle="modal" data-target="#updateModal"
                 wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>

                <button data-toggle="modal" data-target="#deleteModal"
                wire:click="remove({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}