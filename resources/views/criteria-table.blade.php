<table id="example" class="table custom-table mt-3">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Kode</th>
      <th>Nama</th>
      <th>Bobot</th>
      <th>Jenis</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody id="tableBody">
    @foreach ($criteria as $criterion)
    <tr>
      <td>{{$criterion->id}}</td>
      <td>C{{$loop->iteration}}</td>
      <td>{{$criterion->name}}</td>
      <td>{{$criterion->weight}}</td>
      <td>{{$criterion->benefited == 1 ? 'Benefit' : 'Cost'}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Actions">
          <a href="#" data-id="{{$criterion->id}}" data-name="{{$criterion->name}}" data-weight="{{$criterion->weight}}"
            data-benefited="{{$criterion->benefited}}" class="btn btn-warning text-white edit" title="Edit">
            Edit
          </a>
          <a href="#" class="btn btn-danger delete" data-name="{{$criterion->name}}" data-id="{{$criterion->id}}"
            title="Delete">
            Delete
          </a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot class="table-dark">
    <tr>

    </tr>
  </tfoot>
</table>
