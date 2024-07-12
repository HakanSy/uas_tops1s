@extends('layouts.base')

@section('content')
<div class="title-box d-flex gap-3 align-items-center">
  <i class="ri-database-line fs-2 text-primary"></i>
  <p class="fs-3 m-0">Kriteria</p>
</div>

<div class="breadcrumbs-box bg-light p-3 mt-3 rounded shadow-sm">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
        Topsis
      </li>
      <li class="breadcrumb-item active" aria-current="page">Kriteria</li>
    </ol>
  </nav>
</div>

<div class="content-box p-4 mt-4 rounded bg-white shadow-sm">
  <div class="content border rounded p-4">
    <div class="btn-wrapper mt-2 d-flex gap-2">

      {{-- Error Alert --}}
      @if ($errors->any())
      <div class="alert alert-danger w-100">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <button class="btn btn-success" id="add" data-bs-toggle="modal" data-bs-target="#addnew">
        <i class="fas fa-feather-alt"></i> add
    </button>
    </div>

    <div class="table-responsive mt-3">
      @include('criteria-table', $criteria)
    </div>
  </div>
</div>

@include('modal.criteriaModal')

@endsection

@push('js')
<script type="text/javascript">
  $(document).ready(function(){

      $(document).on('click', '.edit', function (event){
          event.preventDefault();
          var id = $(this).data('id');
          var name = $(this).data('name');
          var weight = $(this).data('weight');
          var benefited = $(this).data('benefited');
          $('#editmodal').modal('show');
          $('#name-edit').val(name);
          $('#weight-edit').val(weight);
          $('#benefited-edit').val(benefited);
          $('#edit-id').val(id);
      });

      $(document).on('click', '.delete', function(event){
          event.preventDefault();
          var id = $(this).data('id');
          var name = $(this).data('name');
          $('#deletemodal').modal('show');
          $('#delete-id').val(id);
          $('.criteria-name').html(name);
      });

  });
</script>
@endpush
  