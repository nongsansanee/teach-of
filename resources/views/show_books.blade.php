<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body>
        @if(count($bookDetails)>0)
        <table border="1">
            <tr>
                <td>Book Id</td>
                <td>Book Name</td>
                <td>Book Price</td>
                <td>Status</td>
                <td>Create</td>
                <td>Update</td>
            </tr>
            
            @foreach($bookDetails as $bookDetail)
            <tr>
                <td>{{$bookDetail->id}}</td>
                <td>{{$bookDetail->book_name}}</td>
                <td>{{$bookDetail->price}}</td>
                <td>{{$bookDetail->status}}</td>
                <td>{{$bookDetail->created_at}}</td>
                <td>{{$bookDetail->updated_at}}</td>
            </tr>
            @endforeach
        </table>
        @else
            <p> empty </p>
        @endif
    </body>
</html>
