@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="{{ asset('js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js') }}" defer></script>
<div class="container">
     <br/>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Ref NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Massage</th>
                <th>Status</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
@section('footer')
<script type="text/javascript">
    $(document).ready(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('home.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'reference_number', name: 'reference_number'},
                {data: 'customer_name', name: 'customer_name	'},
                {data: 'email', name: 'email'},
                {data: 'problem_discription', name: 'problem_discription'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>
@endsection
