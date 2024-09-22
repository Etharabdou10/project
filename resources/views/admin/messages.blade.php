@extends('admin.layouts.main')
@section('content_messages')
<div class="container my-5">
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">Messages</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-borderless display" id="_table">
                <thead>
                    <tr>
                        <th scope="col">Created At</th>
                        <th scope="col">Message</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                    <tr>
                        <th scope="row">{{$message->created_at->format('d M Y')}}</th>
                        <td><a href="{{route('messages.show',$message['id'])}}" class="text-decoration-none text-dark">{{Str::limit($message['message'],20)}}</a></td>
                        <td>{{$message->name}}</td>
                        <td>
                            <form action="{{route('messages.forceDelete',$message['id'])}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link m-0 p-0"><img src="{{asset('admin/images/trash-can-svgrepo-com.svg')}}"></button>
                            </form></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>

</div>
@endsection('content_messages')