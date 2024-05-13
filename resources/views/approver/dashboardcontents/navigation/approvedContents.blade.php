<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-regular fa-folder-grid"></i>Approved Content
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="ApprovedTender();">Tenders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="ApprovedNoti();">Notifications</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedCharter();">Citizen Charter</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedScheme();">Scheme</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedForm();">Form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="approvedServices();">Services</a>
                </li> --}}
            </ul>
            <div id="content">
                {{-- <h2 id="h">Approved Contents</h2> --}}
                <div id="atender" style="display:none">
                    @include("approver.approvedContents.navigation.approvedTender")
                </div>
                <div id="anotification" style="display:none">
                    @include("approver.approvedContents.navigation.approveNotification")
                </div>
                {{-- <div id="acharter" style="display:none">
                    @include("approver.approvedContents.navigation.approvedTender")
                </div>
                <div id="aservice" style="display:none">
                    @include("approver.approvedContents.category.approvedDocument")
                </div> --}}
            </div>

        </div>
    </div>
</div>
<script>
    function ApprovedTender(){
        // document.getElementById('h').style.display='none';
        document.getElementById('atender').style.display='block';
        document.getElementById('anotification').style.display='none';
        document.getElementById('acharter').style.display='none';
    }
    function ApprovedNoti(){
        // document.getElementById('h').style.display='none';
        document.getElementById('atender').style.display='none';
        document.getElementById('anotification').style.display='block';
        document.getElementById('acharter').style.display='none';
    }
    
            
            
</script>
