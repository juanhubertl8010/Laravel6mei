@extends('template.main')

@section('title', 'Contact List')

@section('body')
    <h2 style="text-align: center;">Contact List</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border-bottom: 1px solid #ddd;">
                <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Name</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Email</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Phone</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Message</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Delete</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $index => $contact)
                <tr id="row_{{ $index }}" style="border-bottom: 1px solid #ddd;">
                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $contact['name'] }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $contact['email'] }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $contact['phone'] }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $contact['message'] }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                        <form action="{{ route('contact.delete', ['index' => $index]) }}" method="POST" style="display: inline-block;">
                            @csrf
               
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection