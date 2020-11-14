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
                     <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#edit_client"
                     
                    data-cid= "{{ $client->id }}" data-f_name= "{{ $client->name }}" data-m_name="{{ $client->middle_name }}"
                    data-l_name="{{ $client->last_name }}" data-gender="{{ $client->gender }}" data-myaddress="{{ $client->address }}"
                    data-street="{{ $client->street }}" data-city="{{ $client->city }}" data-country="{{ $client->country }}"
                    data-zip="{{ $client->zip }}" data-email="{{ $client->email }}" data-phone="{{ $client->phone }}"         
                    data-dob="{{ $client->dob }}" data-s_date="{{ $client->start_date }}"




                     >Edit</button>
                      <button class="btn btn-sm btn-outline-danger" 
                    data-toggle="modal" data-target="#delete_client"
                    data-cid="{{ $client->id }}"
                      >Delete</button>
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
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

  <div class="modal fade" id="edit_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <form class="form-horizontal" method="POST" action="{{ route('client.update', 'test') }}">
        {{method_field('patch')}}
          @csrf
        <div class="modal-body">
          <input type="hidden" name="client_id" id="client_id" value="">
         @include('clients.edit')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>


  <div class="modal fade" id="delete_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <form class="form-horizontal" method="POST" action="{{ route('client.destroy', 'test') }}">
        {{method_field('delete')}}
          @csrf
        <div class="modal-body">
          <input type="hidden" name="client_id" id="client_id" value="">
          @csrf
          Are You Sure You Want To Remove This Client ?
         {{-- @include('clients.edit') --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>
      </div>
    </div>
  </div>


  @push('clients')
      


  <script>

    $('#edit_client').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget) 
    var client_id = button.data('cid')
    var name = button.data('f_name')
    var middle_name = button.data('m_name')
    var last_name = button.data('l_name')
    var gender = button.data('gender')
    var address = button.data('myaddress')
    var street = button.data('street')
    var city = button.data('city')
    var country = button.data('country')
    var zip = button.data('zip')
    var email = button.data('email')
    var phone = button.data('phone')
    var dob = button.data('dob')
    var start_date = button.data('s_date')
 
   
    var modal = $(this)
    modal.find('.modal-body #client_id').val(client_id)
    modal.find('.modal-body #name').val(name)
    modal.find('.modal-body #middle_name').val(middle_name)
    modal.find('.modal-body #last_name').val(last_name)
    modal.find('.modal-body #gender').val(gender)
    modal.find('.modal-body #address').val(address)
    modal.find('.modal-body #street').val(street)
    modal.find('.modal-body #city').val(city)
    modal.find('.modal-body #country').val(country)
    modal.find('.modal-body #zip').val(zip)
    modal.find('.modal-body #email').val(email)
    modal.find('.modal-body #phone').val(phone)
    modal.find('.modal-body #dob').val(dob)
    modal.find('.modal-body #start_date').val(start_date)

  })

  $('#delete_client').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) 
  var client_id = button.data('cid')

  var modal = $(this)
    modal.find('.modal-body #client_id').val(client_id)
  })
  
    </script>


<script>
  
</script>
    <script>
      // $("#gender").prop("checked", true);
//       $("#gender").click(() => {
//   const val = $('input[value=1]:').val();
//  if (val == 1) {
//   $('input[value=1]:checked')
//  } else {
//   $('input[value=0]:checked')
//  }
// });
      
    </script>

@endpush

@endsection