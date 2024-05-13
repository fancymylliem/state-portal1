<table class="table">
    <thead>
        <th>Sl No</th>
        <th>Category</th>
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        
        @foreach ($vc as $o)
            @if($o->status===1)
                <tr>
                    <td>{{$o->order_id}}</td>
                    <td>Government Order</td>
                    <td>{{$o->title}}</td>
                    <td><a class="btn btn-warning" href="viewgovcontent/{{$id=$o->order_id}}">View</a></td>
                    {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                </tr> 
            @endif
        @endforeach
    </tbody>
</table>