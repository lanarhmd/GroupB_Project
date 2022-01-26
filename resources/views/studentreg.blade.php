@extends('layouts.admin')

<html>
    <head>
        <title>Student Registration Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </head>
<style media="screen">
.form-group{
  margin-top: 15%;
}


</style>


    <body>
        <fieldset>
        <div class="container">
            <div class="form-group col-12 p-0">
                <div>
                    @if(Session::has('success'))
                    <div>{{ Session::get('Success')}}</div>
                    @endif

                </div>
                <form action="{{route('store')}}"method="POST">
                    @csrf


                    <div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h2 style="text-align: center;color:Yellow">Student Registration Form</h2>
                            </div>
                        </div>
                    </div>

                <hr/>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Student Name</label>
                        <input type="text" name="studname" class="form-control" id="studname" placeholder="Student Name">
                    </div><br>

                    <div class="form-group col-md-6">
                        <label>School Name</label>
                        <input type="text" name="school" class="form-control" id="school" placeholder="School Name">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Home Address</label>
                        <input type="text" name="homeadd" class="form-control" id="homeadd" placeholder="Home Address">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Parent's Name</label>
                        <input type="text" name="parname" class="form-control" id="parname" placeholder="Parent's Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Contact No.</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Contact No.">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="subject">Subject</label>
                      <div class="input-group">
                        <select id="subject" name="subject" class="form-control">

                          <option value="1">Bahasa Melayu (Primary School)</option>
                          <option value="2">English (Primary School)</option>
                          <option value="3">Mathematic (Primary School)</option>
                          <option value="4">Science (Primary School)</option>
                          <option value="5">Mandarin (Primary School)</option>
                          <option value="6">Bahasa Melayu (Secondary School)</option>
                          <option value="7">English (Secondary School)</option>
                          <option value="8">Mathematic (Secondary School)</option>
                          <option value="9">Science (Secondary School)</option>
                          <option value="10">Mandarin (Secondary School)</option>
                          <option value="11">Biology (Secondary School)</option>
                          <option value="12">Chemistry (Secondary School)</option>
                          <option value="13">Additional Math (Secondary School)</option>
                          <option value="14">Bahasa Melayu (Secondary School)</option>
                          <option value="15">Physic (Secondary School)</option>
                          <option value="16">Accounting (Secondary School)</option>
                          <option value="17">History (Secondary School)</option>
                          <option value="18">Geography (Secondary School)</option>
                          <option value="19">Tasawur Islam (Secondary School)</option>
                          <option value="20">Bahasa Tamil (Secondary School)</option>
                        </select>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

                    </div>
<br><br>
                    <div class="form-group col-md-6">
                    <div class="input-group-addon"
                    align="center">
                        <Button class="btn btn-success pull-center" style="width: 80px;">Submit</Button>
                    </div></div>
                </div>
                </fieldset>
    </body>
    </html>
