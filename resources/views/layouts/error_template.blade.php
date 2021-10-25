@if($errors->any())
        <ul class="ul-error" style="list-style: none;">
            @foreach ($errors->all() as $error)
                <div class="alert-timeout alert error-alert-danger">
                    <li>{{ $error }}</li>
                </div>
            @endforeach
        </ul>
@endif

@if(session()->has('success_report'))
 <div class="alert-timeout alert error-alert-success alert-block">
  <h4 class="alert-heading">Success!</h4>
    {{ session()->get('success_report')}}
</div>
<br/>
@endif




@if(session()->has('failure_report'))
 <div class="alert-timeout alert error-alert-danger alert-block">
  <h4 class="alert-heading">Error!</h4>
    {{ session()->get('failure_report')}}
</div>
<br/>
@endif