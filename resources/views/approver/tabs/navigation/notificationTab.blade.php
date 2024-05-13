<table class="table">
    <thead>
        <th>Sl No</th>
        {{-- <th>Category</th> --}}
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        @foreach ($notification as $n)
        @if($n->status===1)
            <tr>
                <td>{{$n->notification_id}}</td>
                {{-- <td>Act</td> --}}
                <td>{{$n->title}}</td>
                <td><a class="btn btn-warning" href="viewnotificationcontent/{{$id=$n->notification_id}}">View</a></td>
                {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>