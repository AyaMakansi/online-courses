<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/q.css')}}">
<h3 style="text-align: center;">The Questions in the quiz</h3>



</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error</strong> {{$error}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      
        @endforeach
        @if(Session::get('successMessage'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
               <strong>Error</strong> {{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php Session::forget('successMessage');?>
               @endif
      </div>
      <div class="col-md-4"></div>
    </div>
   </div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1"><h2>Users <b></b></h2></div>
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button></div>
                    <div class="col-sm-4">
                        <div class="search-box">

                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Question <i class="fa fa-sort"></i></th>
                       
                       <th></th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($allquestions as $q)
                    <tr>
                        <td>1</td>
                        <td>{{$q->question}}</td>
                        <td>
                            <a href="#" class="text-warning"  data-toggle="tooltip" data-toggle="modal" data-target="#Modal_update{{$q->id}}">Update</a>
                            <a href="#" class="text-danger"  data-toggle="tooltip" >Delete</a>
                        </td>
                 @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method= "POST"  action="{{ route('Add Question') }}">
        @csrf
      <div class="modal-body">
        <div class="row">
          <h5>Question: </h5>
        </div>
        <div class="row" style="padding:10px;">
          <input  name="question" value="{{$q->question}}"class="form-control">
        </div>
            <div class="row">
              <div class="col-md-6"><label>A:</label></div>
              <div class="col-md-6"><label>B:</label></div>
             </div>
             <div class="row">
              <div class="col-md-6"><input value="{{$q->a}}" name="opa"></div>
              <div class="col-md-6"><input value="{{$q->b}}" name="opb"></div>
             </div>
             <div class="row">
              <div class="col-md-6"><label>C:</label></div>
              <div class="col-md-6"><label>D:</label></div>
             </div>
             <div class="row">
              <div class="col-md-6"><input value="{{$q->c}}" name="opc"></div>
              <div class="col-md-6"><input value="{{$q->d}}" name="opd"></div>
             </div>
             <div class="row">
                <div class="col-md-3"><label>Answer:</label>
                  <select value="{{$q->ans}}" name="ans" class="form-control">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                  </select>  
                  
                 
                   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Add Question</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- Modal-Update -->
<div class="modal fade" id="Modal_update{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method= "POST"  action="{{ route('categories.add') }}">
        @csrf
      <div class="modal-body">
        <div class="row">
        <h5>Question: </h5>
        </div>
        <div class="row" style="padding:10px;">
          <input  name="question" value="{{$q->question}}"class="form-control">
        </div>
            <div class="row">
              <div class="col-md-6"><label>A:</label></div>
              <div class="col-md-6"><label>B:</label></div>
             </div>
             <div class="row">
              <div class="col-md-6"><input value="{{$q->a}}" name="opa"></div>
              <div class="col-md-6"><input value="{{$q->b}}" name="opb"></div>
             </div>
             <div class="row">
              <div class="col-md-6"><label>C:</label></div>
              <div class="col-md-6"><label>D:</label></div>
             </div>
             <div class="row">
              <div class="col-md-6"><input value="{{$q->c}}" name="opc"></div>
              <div class="col-md-6"><input value="{{$q->d}}" name="opd"></div>
             </div>
             <div class="row">
                <div class="col-md-3"><label>Answer:</label>
                  <select value="{{$q->ans}}" name="ans" class="form-control">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                  </select>  
                  <select name="quiz_id" class="form-control">
                  <option disabled selected>quiz</option>
                            <option value=""></option>
                          
                  </select>  
                   </div>
      </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
     
    </div>
  </div>
</div>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>

