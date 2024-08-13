@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Applicants Information</h6>
                        <hr/>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Applicant's Name</th>
                                <th>Subject</th>
                                <th>Mail</th>
                                <th>Number</th>
                                <th>Academy</th>
                                <th>Result</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Button</th>
                            </tr>

                            @foreach($admissions as $admission)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="">{{ $admission->s_name }}</td>
                                    <td>{{ $admission->subject }}</td>
                                    <td>{{ $admission->s_mail }}</td>
                                    <td>{{ $admission->s_number }}</td>
                                    <td>{{ $admission->academy }}</td>
                                    <td>{{ $admission->s_result }}</td>
                                    <td>{{ $admission->s_address }}</td>
                                    <td>
                                        <img src="{{ asset($admission->image) }}" alt="" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('delete.applicants',['id'=>$admission->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
