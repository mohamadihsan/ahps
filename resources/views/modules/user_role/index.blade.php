@extends('layouts.template')

@section('title', 'User Role')

@section('content')

    <div class="page-header">
        <div class="page-header-title">
            <h4>User Role</h4>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">User Role </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-body">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="pull-right">
                        <button onclick="addForm()" class="btn btn-primary waves-effect waves-light btn-sm md-trigger"><i class="ti-plus"></i> Add Data</button>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="user-role-table" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th width="30">No</th>
                                    <th>Role Name</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>        

    @include('modules.user_role.form')

@endsection

@section('script')
    
    <script type="text/javascript">
        
        var table = $('#user-role-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('api.user_role') }}",
                        columns: [
                            { data: 'id', name: 'id', orderable: false, searchable: false },
                            { data: 'role_name', name: 'role_name' },
                            { data: 'description', name: 'description' },
                            { data: 'action', name: 'action', orderable: false, searchable: false },
                        ]
                    });

        function addForm(){
            save_method = 'add';
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add User Role');
            $('.role_name-message').text('');
            $('.description-message').text('');
        }

        function editForm(id){
            save_method = 'edit';
            $('input[name=_method').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ url('admin/user_role') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit User Role');
                    $('.role_name-message').text('');
                    $('.description-message').text('');
                    
                    $('#id').val(data.id);
                    $('#role_name').val(data.role_name);
                    $('#description').val(data.description);
                },
                error: function(){
                    alert("Nothing Data");
                }
            });
        }

        function deleteData(id){
              var csrf_token = $('meta[name="csrf-token"]').attr('content');
              // var popup = confirm("Aslina Bade Di Hapus Kang/Teh ???");
              swal({
                  title: 'Are you sure?',
                  text: "Data will be delete permanent.",
                  type: 'warning',
                  showCancelButton: true,
                  cancelButtonColor: '#d33',
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'Delete',
                  cancelButtonText: "Cancel"
              }, function (isConfirm) {
                  if (isConfirm) {
                     $.ajax({
                        url : "{{ url('admin/user_role') }}" + '/' + id,
                        type : "POST",
                        data : {'_method' : 'DELETE', '_token' : csrf_token},
                        success : function(data) {
                            table.ajax.reload();
                            
                            $(document).ready(function() {
                                toastr.success(data.message, 'Success')
                            });
                        },
                        error : function () {
                            $(document).ready(function() {
                                toastr.error('Problem with connection', 'Error')
                            });
                        }
                    });
                  }
              });
        }

        $(function(){
            $('#modal-form form').validator().on('submit', function(e){
                if (!e.isDefaultPrevented()) {
                    var id  = $('#id').val();

                    if (_validator()) {
                        if (save_method == 'add'){
                            url = "{{ url('admin/user_role') }}";
                        }else{
                            url = "{{ url('admin/user_role') . '/' }}" + id;
                        }
                        
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: url,
                            type: "POST",
                            data: $('#modal-form form').serialize(),
                            success: function(data){
                                $('#modal-form').modal('hide');
                                table.ajax.reload();

                                $(document).ready(function() {
                                    toastr.success(data.message, 'Success')
                                });
                            },
                            error: function(){
                                $(document).ready(function() {
                                    toastr.error('Problem with connection', 'Error')
                                });
                            }
                        });
                    }

                    return false;
                }
            });
        });


        function _validator(){
            var role_name   = $('#role_name').val();
            var description = $('#description').val();

            if (role_name == '' || description == '') {
                
                if (role_name == '') {
                    $('.role_name-message').text('(Role Name wajib diisi)');
                }else{
                    $('.role_name-message').text('');
                }

                if (description == '') {
                    $('.description-message').text('(Description wajib diisi)');
                }else{
                    $('.description-message').text('');
                }

                return false;
            }
            
            return true;
        }

        // var table = $('#user-role-table').DataTable({
        //               processing: true,
        //               serverSide: true,
        //               destroy: true,
        //               ajax: "{{ route('api.user_role') }}",
        //               columns: [
        //                 {data: 'id', name: 'id'},
        //                 {data: 'role_name', name: 'role_name'},
        //                 {data: 'description', name: 'description'},
        //                 {data: 'action', name: 'action', orderable: false, searchable: false}
        //               ]
        //             });
        // function addForm() {
        //     save_method = "add";
        //     $('input[name=_method]').val('POST');
        //     $('#modal-form').modal('show');
        //     $('#modal-form form')[0].reset();
        //     $('.modal-title').text('Add USer Role');
        // }
        // function editForm(id) {
        //     save_method = 'edit';
        //     $('input[name=_method]').val('PATCH');
        //     $('#modal-form form')[0].reset();
        //     $.ajax({
        //       url: "{{ url('admin/user_role') }}" + '/' + id + "/edit",
        //       type: "GET",
        //       dataType: "JSON",
        //       success: function(data) {
        //         $('#modal-form').modal('show');
        //         $('.modal-title').text('Edit User Role');

        //         $('#id').val(data.id);
        //         $('[name=role_name]').val(data.role_name);
        //         $('[name=description]').val(data.description);
        //       },
        //       error : function() {
        //           alert("Nothing Data");
        //       }
        //     });
        // }
        // function deleteData(id){
        //       var csrf_token = "{{ csrf_token() }}";
        //       // var popup = confirm("Aslina Bade Di Hapus Kang/Teh ???");
        //       swal({
        //           title: 'Apakah anda yakin menghapus data ini?',
        //           text: "Jika anda menghapus data ini, anda tidak akan bisa melihat kembali data tersebut.",
        //           type: 'warning',
        //           showCancelButton: true,
        //           cancelButtonColor: '#d33',
        //           confirmButtonColor: '#3085d6',
        //           confirmButtonText: 'Ya',
        //           cancelButtonText: "Tidak"
        //       }, function (isConfirm) {
        //           if (isConfirm) {
        //              $.ajax({
        //                 url : "{{ url('admin/user_role') }}" + '/' + id,
        //                 type : "POST",
        //                 data : {'_method' : 'DELETE', '_token' : csrf_token},
        //                 success : function(data) {
        //                     table.ajax.reload();
        //                     swal({
        //                         title: 'Success!',
        //                         text: data.message,
        //                         type: 'success',
        //                         timer: '1500'
        //                     })
        //                 },
        //                 error : function () {
        //                     swal({
        //                         title: 'Oops...',
        //                         text: data.message,
        //                         type: 'error',
        //                         timer: '1500'
        //                     })
        //                 }
        //             });
        //           }
        //       });
        // }
        // $(function(){
        //     $('#modal-form form').validator().on('submit', function (e) {
        //         if (!e.isDefaultPrevented()){
        //             var id = $('#id').val();
        //             if (save_method == 'add') url = "{{ url('admin/user_role') }}";
        //             else url = "{{ url('admin/user_role') . '/' }}" + id;

        //             $.ajax({
        //                 url : url,
        //                 type : "POST",
        //                 // data : $('#modal-form form').serialize(),
        //                 data: new FormData($("#modal-form form")[0]),
        //                 contentType: false,
        //                 processData: false,
        //                 success : function(data) {
        //                     $('#modal-form').modal('hide');
        //                     table.ajax.reload();
        //                     // swal({
        //                     //     title: 'Success!',
        //                     //     text: data.message,
        //                     //     type: 'success',
        //                     //     timer: '1500'
        //                     // })
        //                 },
        //                 error : function(data){
        //                     // swal({
        //                     //     title: 'Oops...',
        //                     //     text: data.message,
        //                     //     type: 'error',
        //                     //     timer: '1500'
        //                     // })
        //                     alert('error euy');
        //                 }
        //             });
        //             // console.log(data);
        //             return false;
        //         }
        //     });
        // });
    </script>

    {{-- {!! Toastr::message() !!} --}}

@endsection