@extends('layouts.app')

@section('content')
<script type="text/javascript">
function change(input){
  var label = input.parentNode;
  var name = input.getAttribute("name");
  if(input.checked){
    label.style.backgroundColor = '#DCEDC8';
    label.innerHTML = '<input type="checkbox" name="' + name + '" autocomplete="off" onchange="change(this);" value="1" checked> Yes';
  }else{
    label.style.backgroundColor = '#F8BBD0';
    label.innerHTML = '<input type="hidden" name="' + name + '" value="0">';
    label.innerHTML += '<input type="checkbox" autocomplete="off" name="' + name + '" onchange="change(this);"> No';
  }
}
function deleteUser(button){
  swal({
    title:"Are you sure?",
    text: "You will not be able to recover this user information!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false },
    function(){
      button.form.submit();
      swal("Deleted!", "User has been deleted.", "success");
    });
}
function saveUser(button){
  swal({
    title:"Success",
    text: "Updated !",
    type: "success",
  },function(){
    button.form.submit();
  });
}
</script>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  @if(Auth::user()->admin == true)
                  <div class="col-sm-12">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Permission Setup
                      </div>
                      <div class="panel-body">
                        <div class="col-sm-10">
                          <form action="{{ url('/user/permission') }}" method="post">
                            {!! csrf_field() !!}
                            <table class="table table-hover table-condensed table-striped">
                              <tr>
                                <td>
                                  Registered User
                                </td>
                                <td>
                                  Email
                                </td>
                                <td>
                                  Administrator
                                </td>
                                <td>
                                  Employee
                                </td>
                              </tr>
                              @foreach($user as $key => $u)
                              <tr>
                                <td>
                                  {{$u->name}}
                                  <input type="hidden" name="id[]" value="{{ $u->id }}">
                                </td>
                                <td>
                                  {{$u->email}}
                                </td>
                                <td>
                                  @if($u->admin)
                                    <label class="btn btn-block" style="background-color:#DCEDC8;">
                                      @if($key == 0)
                                      <input type="hidden" name="admin[]" value="1" checked>
                                      <input type="checkbox" name="admin[]" checked disabled>
                                      Yes
                                      @else
                                      <input type="checkbox" autocomplete="off" name="admin[]" onchange="change(this);" value="1" checked>
                                      Yes
                                      @endif
                                    </label>
                                  @else
                                    <label class="btn btn-block" style="background-color:#F8BBD0;">
                                      <input type="hidden" name="admin[]" value="0">
                                      <input type="checkbox" name="admin[]" autocomplete="off" onchange="change(this);"> No
                                    </label>
                                  @endif
                                </td>
                                <td>
                                  @if($u->employee)
                                    <label class="btn btn-block" style="background-color:#DCEDC8;">
                                      <input type="checkbox" autocomplete="off" name="employee[]" onchange="change(this);" value="1" checked>
                                      Yes
                                    </label>
                                  @else
                                    <label class="btn btn-block" style="background-color:#F8BBD0;">
                                      <input type="hidden" name="employee[]" value="0">
                                      <input type="checkbox" name="employee[]" autocomplete="off" onchange="change(this);"> No
                                    </label>
                                  @endif
                                </td>
                              </tr>
                              @endforeach
                            </table>
                            <div class="col-sm-3 col-sm-offset-9">
                              <input value="Save" onclick="saveUser(this);" class="btn btn-success btn-block">
                            </div>
                          </form>
                        </div>
                        <div class="col-sm-2">
                          <table class="table table-hover table-condensed table-striped">
                            <tr class="warning">
                              <td>
                                Be Careful !
                              </td>
                            </tr>
                            @foreach($user as $key => $u)
                            <tr>
                              <td>
                                <form class="form-horizontal" action="{{ url('/user/delete')}}" method="post" role="form">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="{{ $u->id }}" />
                                  <input class="btn btn-danger btn-block" value="Delete" onclick="deleteUser(this);" @if($key==0) disabled @endif>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Permission div ends here-->
                  @endif
                  <!--personal information setup-->
                  <div class="col-sm-6">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Display Setup
                      </div>
                      <div class="panel-body">
                        <div class="form-group">
                          <form action="/user/update" method="post">
                            {!! csrf_field() !!}
                            <div class="col-sm-12">
                              <div class="col-sm-2">
                                <label for="">Name</label>
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                              </div>
                              <div class="col-sm-4">
                                <input type="text" name="display_name" class="form-control" value="{{ Auth::user()->display_name }}" required>
                              </div>
                              <div class="col-sm-2">
                                <label for="">Gender</label>
                              </div>
                              <div class="col-sm-4">
                                <select class="form-control" name="gender" required>
                                  <option value="Male" @if(Auth::user()->gender == "Male") selected @endif> Male </option>
                                  <option value="Female" @if(Auth::user()->gender == "Female") selected @endif> Female </option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-12" style="padding-top:20px;">
                              <div class="col-sm-2">
                                <label for="">Specilized</label>
                              </div>
                              <div class="col-sm-10">
                                <textarea name="specialized" class="form-control" rows="2" cols="40">{{ Auth::user()->specialized }}</textarea>
                              </div>
                            </div>
                            <div class="col-sm-12" style="padding-top:20px;">
                              <div class="col-sm-12">
                                <label for="">Available Time</label>
                              </div>
                              <div class="col-sm-12">
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="mon" value="1" @if(Auth::user()->mon == 1) checked @endif> Mon.
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="tue" value="1" @if(Auth::user()->tue == 1) checked @endif> Tue.
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="wed" value="1" @if(Auth::user()->wed == 1) checked @endif> Wed.
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="thur" value="1" @if(Auth::user()->thur == 1) checked @endif> Thur.
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="fri" value="1" @if(Auth::user()->fri == 1) checked @endif> Fri.
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="sat" value="1" @if(Auth::user()->sat == 1) checked @endif> Sat.
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="sun" value="1" @if(Auth::user()->sun == 1) checked @endif> Sun.
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-4 col-sm-offset-8">
                              <div class="col-sm-12" style="padding-top:20px;">
                                <input value="Save" onclick="saveUser(this);" class="btn btn-success btn-block">
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Display setup ends-->
                  <!--Calendar-->
                  <div class="col-sm-12">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Schedule
                      </div>
                      <div class="panel-body">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="modalTitle"></h4>
                        </div>
                        <div class="modal-body">
                          <p id="modalInfo">

                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
