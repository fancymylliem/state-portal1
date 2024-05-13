<table class="table">
    <thead>
        <th>Sl No</th>
        <th>Notification Id</th>
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        @foreach ($notification as $n)
        @if($n->status===2)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$n->tender_id}}</td>
                <td>{{$n->title}}</td>
                <td><a class="btn btn-warning" href="viewnotificationcontent/{{$id=$n->notification_id}}">View</a></td>
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>