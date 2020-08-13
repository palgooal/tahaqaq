@extends('layouts.admin')
@section('content')


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">البريد</th>
            <th scope="col">الصلاحية</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1; ?>
        @foreach ($users as $user)
        <tr>
            <th scope="row"><?php echo $counter; ?></th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <span class="label label-inline label-light-primary font-weight-bold">
                    Pending
                </span>
            </td>
        </tr>
        <?php $counter++; ?>
        @endforeach
        
       
    </tbody>
</table>


@endsection