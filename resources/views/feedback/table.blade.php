<table class="table table-responsive-sm table-striped" id="exams-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($feedback as $feed)
        <tr>
            <td>{!! $feed->name !!}</td>
            <td>{!! $feed->email !!}</td>
            <td>{!! $feed->phone !!}</td>
            <td>{!! $feed->message !!}</td>
            <td>
                <form action="{{ route('feed.destroy', $feed->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-ghost-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                  
                </form>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>