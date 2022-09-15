@extends('layouts.admin')
@section('content')
    <div class="mt-20 mx-10">
        <table class="table table-zebra ">
            <thead>
                <tr class="">
                    <td class="">Issue ID</td>
                    <td class="">Title</td>
                    <td class="">Author</td>
                    <td class="text-center ">User Name</td>
                    <td class="text-center ">Issue Date</td>
                    <td class="text-center ">Action</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($books as $book)
                    <tr class="hover">
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>
                            <form action="{{ route('book_issues.return_book', ['issue_id' => $book->id]) }}"
                                method="post" class="inline-block">
                                @csrf
                                @method('PUT')
                                <input type="submit" name="" id="" class="btn btn-outline btn-accent"
                                    value="Return Book">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
