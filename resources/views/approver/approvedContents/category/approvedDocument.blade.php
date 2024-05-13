<table class="table">
    <thead>
        <th>Sl No</th>
        <th>Document Id</th>
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        
        @foreach ($doc as $o)
        @if($o->status==2)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$o->doc_id}}</td>
                <td>{{$o->title}}</td>
                <td><a class="btn btn-warning" href="viewdoccontent/{{$did=$o->doc_id}}">View</a></td>
                {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>