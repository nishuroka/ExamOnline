<table class="table table-responsive-sm table-striped" id="exams-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </thead>
    <tbody>
    @foreach($feedback as $feed)
        <tr>
            <td>{!! $feed->name !!}</td>
            <td>{!! $feed->email !!}</td>
            <td>{!! $feed->phone !!}</td>
            <td>{!! $feed->message !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>