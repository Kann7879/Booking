@php
    $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard';
    $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName(), $role)
        ->where('title', '!=', $breadcrumb->title)->last();
@endphp

@extends('layout.backend.main', ['title' => 'Dashboard | ' . config('app.name'), 'sub_title' => $sub_title])

@section('content')
<div class="card">
  <div class="card-header">
      <strong>Set Permission untuk role <i>{{ $role->name }}</i></strong>
  </div>
  <div class="card-body">
      <div class="mb-2">
          <label>
              <input type="checkbox" id="checkAll"> Select / Deselect All
          </label>
      </div>
      <div id="jstree"></div>
      <hr>
      <button id="btnSave" class="btn btn-primary">Simpan Perubahan</button>
      <a href="{{ route('role.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/jstree.min.js"></script>
<script>
$(function(){
    let tree = $('#jstree').jstree({
        core : {
            data : @json($tree),
            themes : { icons : true }
        },
        plugins : ['checkbox']
    });

    // Select / Deselect all
    $('#checkAll').on('change', function(){
        tree.jstree($(this).is(':checked') ? 'check_all' : 'uncheck_all');
    });

    // Simpan
    $('#btnSave').click(function(){
        let selected = tree.jstree('get_selected', true)
                           .map(n => n.id)
                           .filter(id => !isNaN(id)); // hanya angka (permission id)

        $.ajax({
            url : "{{ route('role.showaction', $role->id) }}",
            type: "POST",
            data : {
                _token : "{{ csrf_token() }}",
                permission : selected.join(',')
            },
            success : res => {
                alert('Permission berhasil diperbarui');
                location.reload();
            },
            error : err => alert('Terjadi kesalahan')
        });
    });
});
</script>
@endpush