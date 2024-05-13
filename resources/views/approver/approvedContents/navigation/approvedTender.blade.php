<table class="table">
    <thead>
        <th>Sl No</th>
        <th>Tender Id</th>
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        @foreach ($tender as $t)
        @if($t->status===2)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$t->tender_id}}</td>
                <td>{{$t->title}}</td>
                <td><a class="btn btn-warning" href="viewtendercontent/{{$id=$t->tender_id}}">View</a></td>
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>