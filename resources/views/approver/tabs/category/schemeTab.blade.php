<table class="table">
    <thead>
        <th>Sl No</th>
        <th>Category</th>
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        @foreach ($scheme as $s)
        @if($s->status===1)
            <tr>
                <td>{{$s->scheme_id}}</td>
                <td>Scheme</td>
                <td>{{$s->title}}</td>
                <td><a class="btn btn-warning" href="viewschemecontent/{{$id=$s->scheme_id}}">View</a></td>
                {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>