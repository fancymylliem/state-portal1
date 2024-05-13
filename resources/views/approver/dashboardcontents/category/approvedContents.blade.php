<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-regular fa-folder-grid"></i>Approved Content
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="ApprovedAct();">Acts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedGovOrder();">Government Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedDoc();">Documents</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedScheme();">Scheme</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedForm();">Form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedServices();">Services</a>
                </li>
            </ul>
            <div id="content">
                {{-- <h2 id="h">Approved Contents</h2> --}}
                <div id="agov" style="display:none">
                    @include("approver.approvedContents.category.approvedGovOrder")
                </div>
                <div id="aact" style="display:none">
                    @include("approver.approvedContents.category.approvedAct")
                </div>
                <div id="adoc" style="display:none">
                    @include("approver.approvedContents.category.approvedDocument")
                </div>
                <div id="ascheme" style="display:none">
                    @include("approver.approvedContents.category.approvedDocument")
                </div>
                <div id="aform" style="display:none">
                    @include("approver.approvedContents.category.approvedDocument")
                </div>
                <div id="aservice" style="display:none">
                    @include("approver.approvedContents.category.approvedDocument")
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function ApprovedAct(){
                document.getElementById('h').style.display='none';
                document.getElementById('aact').style.display='block';
                document.getElementById('agov').style.display='none';
                document.getElementById('adoc').style.display='none';
                document.getElementById('ascheme').style.display='none';
                document.getElementById('aform').style.display='none';
                document.getElementById('aservice').style.display='none';
            }
            function approvedGovOrder(){
                document.getElementById('h').style.display='none';
                document.getElementById('aact').style.display='none';
                document.getElementById('agov').style.display='block';
                document.getElementById('adoc').style.display='none';
                document.getElementById('ascheme').style.display='none';
                document.getElementById('aform').style.display='none';
                document.getElementById('aservice').style.display='none';
            }
            function approvedDoc(){
                document.getElementById('h').style.display='none';
                document.getElementById('aact').style.display='none';
                document.getElementById('agov').style.display='none';
                document.getElementById('adoc').style.display='block';
                document.getElementById('ascheme').style.display='none';
                document.getElementById('aform').style.display='none';
                document.getElementById('aservice').style.display='none';

            }
            function approvedScheme(){
                document.getElementById('h').style.display='none';
                document.getElementById('aact').style.display='none';
                document.getElementById('agov').style.display='none';
                document.getElementById('adoc').style.display='none';
                document.getElementById('ascheme').style.display='block';
                document.getElementById('aform').style.display='none';
                document.getElementById('aservice').style.display='none';

            }
            function approvedForm(){
                document.getElementById('h').style.display='none';
                document.getElementById('aact').style.display='none';
                document.getElementById('agov').style.display='none';
                document.getElementById('adoc').style.display='none';
                document.getElementById('ascheme').style.display='none';
                document.getElementById('aform').style.display='block';
                document.getElementById('aservice').style.display='none';

            }
            function approvedService(){
                document.getElementById('h').style.display='none';
                document.getElementById('aact').style.display='none';
                document.getElementById('agov').style.display='none';
                document.getElementById('adoc').style.display='none';
                document.getElementById('ascheme').style.display='none';
                document.getElementById('aform').style.display='none';
                document.getElementById('aservice').style.display='block';

            }
</script>
