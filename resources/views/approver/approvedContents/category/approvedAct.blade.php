<table class="table">
    <thead>
        <th>Sl No</th>
        <th>Act Id</th>
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        @foreach ($act as $o)
        @if($o->status===2)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$o->act_id}}</td>
                <td>{{$o->title}}</td>
                <td><a class="btn btn-warning" href="viewactcontent/{{$aid=$o->act_id}}">View</a></td>
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>