@extends('layout')

@section('title', 'บทความ')

@section('content')
    <h2 class="text text-center by-2">บทความทั้งหมด</h2>
    <hr>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Title</th>
                {{--  <th scope="col">Content</th> --}}
                <th scope="col">Status</th>
                <th scope="col">Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog2 as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    {{--  <td>{{ Str::limit($item->content, 30) }}</td> --}}
                    <td>
                        @if($item->status)
                           <a href="/change/{{$item->id}}" class="btn btn-success">เผยแพร่</a>
                        @else
                           <a href="/change/{{$item->id}}" class="btn btn-danger">ไม่เผยแพร่</a>
                        @endif
                    </td>
                    <td><a href="/edit/{{ $item->id }}" class="btn btn-warning">แก้ไข</a></td>
                    <td><a href="/delete/{{ $item->id }}" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบบทความนี้ {{ $item->title }} จริงหรือไม่?')">ลบ </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
