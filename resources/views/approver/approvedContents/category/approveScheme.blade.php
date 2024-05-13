<table class="table">
    <thead>
        <th>Sl No</th>
        <th>Scheme Id</th>
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        @foreach ($scheme as $s)
        @if($s->status===2)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$s->Scheme_id}}</td>
                <td>{{$s->title}}</td>
                <td><a class="btn btn-warning" href="viewactcontent/{{$aid=$s->scheme_id}}">View</a></td>
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>