@extends('dashboard')
 
@section('content')
@if(isset($vols))
<!-- Modal -->
<div class="modal fade" id="editVolModal" tabindex="-1" aria-labelledby="editVolModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editVolModalLabel">Edit Vol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form to edit vol -->
        <form action="{{ route('vols.update', $vol->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Input fields to edit vol properties -->
            <div class="mb-3">
                <label for="Nom_vol" class="form-label">Nom Vol</label>
                <input type="text" class="form-control" id="Nom_vol" name="Nom_vol" value="{{ $vol->Nom_vol }}">
            </div>
            <!-- Add more input fields for other properties -->
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editVolModal">
  Edit Vol
</button>

@else
    <p>No vols data found</p>
@endif
@endsection
