@extends('layouts.master')

@section('content')
    
<div class="row">
  {{-- @livewire('clients') --}}
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <p class="card-title"> <span style="font-size: 20px;" >Clients</span> 
                 <button class="btn btn-sm btn-outline-success float-right"
                  data-toggle="modal" data-target="#add_client">Add New</button>
                </P>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <tr><th>
                    No
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th >
                    Start Date
                  </th>
                  <th class="text-right">
                    Modify
                  </th>
                </tr></thead>
                <tbody>
                  <tr>
                    @foreach ($clients as $client)
                        
                   
                    <td>
                     {{++$i}}
                    </td>
                    <td>
                      <a href="{{ route('client.show', $client->id)}}">
                      {{ $client->name }}
                    </a>
                    </td>
                    <td>
                      {{ $client->email }}
                    </td>
                    <td >
                      
                      {{ $client->start_date }}
                    </td>
                    <td class="text-right">
                     <button class="btn btn-sm btn-outline-info">Edit</button>
                      <button class="btn btn-sm btn-outline-danger">Delete</button>
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








  
  <!-- Modal -->
  <div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <form class="form-horizontal" method="POST" action="{{ route('client.store') }}">
          @csrf
        <div class="modal-body">
         @include('clients.create')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>


@endsection