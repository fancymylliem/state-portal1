<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-share-from-square"></i><h5 class="text-warning fw-bold">Draft</h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                {{-- <th>Sl No</th> --}}
                <th>ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                
                @foreach ($vc as $o)
                    @if($o->status== 0)
                        <tr>
                            {{-- <td>{{$loop->index+1}}</td> --}}
                            <td>{{$o->order_id}}</td>
                            <td>Government Order</td>
                            <td>{{$o->title}}</td>
                            <td>
                                @if ($o->status == 3)
                                <h6 class="fw-bold text-warning">Rechack</h6>
                            @else
                            <h6 class="fw-bold text-info">Not yet send</h6>
                                @endif
                            </td>
                            <td><a class="btn btn-warning" href="">View</a></td>
                            {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                        </tr> 
                    @endif
                @endforeach
                @foreach ($act as $a)
                @if($a->status== 0 || $a->status== 3)
                    <tr>
                        {{-- <td>{{$loop->index+1}}</td> --}}
                        <td>{{$a->act_id}}</td>
                        <td>Act</td>
                        <td>{{$a->title}}</td>
                        <td>
                            @if ($a->status == 3)
                            <h6 class="fw-bold text-warning">Rechack</h6>
                            @else
                            <h6 class="fw-bold text-info">Not yet send</h6>
                            @endif
                        </td>
                        <td><a class="btn btn-warning" href="/viewactdetails/{{$id=$a->act_id}}">view</a></td>
                        {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                    </tr> 
                @endif
                @endforeach
                
                @foreach ($doc as $o)
                @if($o->status===0)
                    <tr>
                        {{-- <td>{{$loop->index+1}}</td> --}}
                        <td>{{$o->doc_id}}</td>
                        <td>Document</td>
                        <td>{{$o->title}}</td>
                        {{-- <td><a class="btn btn-warning" href="">Send</a></td> --}}
                        {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                    </tr> 
                @endif
                @endforeach

                @foreach ($tender as $t)
                @if($t->status == 0 || $t->status == 3)
                    <tr>
                        {{-- <td>{{$loop->index+1}}</td> --}}
                        <td>{{$t->tender_id}}</td>
                        <td>Tender</td>
                        <td>{{$t->title}}</td>
                        <td>
                            @if ($t->status == 3)
                            <h6 class="fw-bold text-warning">Rechack</h6>
                            @else
                            <h6 class="fw-bold text-info">Not yet send</h6>
                            @endif
                        </td>
                        <td><a class="btn btn-warning" href="/viewtenderdetails/{{$id=$t->tender_id}}">view</a></td>
                        {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                    </tr> 
                @endif
                @endforeach
           
            </tbody>
        </table>
    </div>
</div>