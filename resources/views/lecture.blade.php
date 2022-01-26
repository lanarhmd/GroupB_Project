@extends('layouts.admin')


 <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style media="screen">
body {
    background-image: url(images/bgk.jpg);
    font-family: Verdana, sans-serif; margin:0;
}

#login-overlay{
  width: 50%;
  margin-left: 30%;
  margin-bottom: 10%;
  margin-top: 10%;
}
}
</style>



<body>
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <div id="login-overlay" >
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel"></h4>

            </div>

            <h2 style="text-align: center;">TUTOR REGISTRATION</h2>

            <div class="modal-body">


                <form action="/lecture" method="POST" enctype="multipart/form-data" >
                  @CSRF
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="First Name">First Name</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="FName" placeholder="Enter First Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        <br>
                        <label for="Email">Email</label>
                        <div class="input-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter Username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <br>
                </div>
                </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                        <label for="Last Name">Last Name</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="Lname" placeholder="Enter Last Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>

                        <br>
                        <label for="Phone Number">Phone Number</label>
                        <div class="input-group">
                        <input type="number" class="form-control" name="phoneNo" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>

<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="Address">Address</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="address" placeholder="Enter Street Name and Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br>
                    </div>
                </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="City">City</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                 </div>
                 </div>
                        <div class="form-group">
                        <div class="col-xs-6">
                        <label for="Resume">Resume</label>
                        <div class="input-group">
                        <input type="file" class="form-control" name="resume"  required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

                        </div>

                        <br>
                        <label for="Tuition Centre">Tuition Centre</label>
                        <div class="input-group">
                          <select id="Tuition Centre" name="tuitionCenter" class="form-control">
                            <option value="1">Educare Tuition Centre, Gombak</option>
                            <option value="2">Educare Tuition Centre, Rawang</option>
                            <option value="3">Educare Tuition Centre, Petaling Jaya</option>
                         </select>
                           <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

                    </div>

<!--------------------------------------separator---------------------------------------------------------------> <br>

              </div>
              </div>
                       <div class="form-group">
                       <div class="col-xs-6">
                       <label for="LevelOfStudy">Level of study</label>
                       <div class="input-group">
                        <input type="text" class="form-control" name="LevelOfStudy" placeholder="Enter level of study and course" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

                       </div>

                      <br>
                      <label for="Subject">Subject</label>
                      <div class="input-group">
                        <select id="Subject" name="subject" class="form-control">

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

<!----------------------------break-------------------------------------------------------------> <br>
              </div>
              </div>
                          <div class="form-group">
                          <div class="col-xs-6">
                          <label for="Tuition Centre">Preferred day</label>
                          <div class="input-group">
                       <select id="Preferred day" name="day" class="form-control">
                          <option value="1">Monday</option>
                          <option value="2">Tuesday</option>
                          <option value="3">Wednesday</option>
                          <option value="4">Thursday</option>
                          <option value="5">Friday</option>
                          <option value="6">Saturday</option>
                          <option value="7">Sunday</option>
                       </select>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
<!--------------------------------------separator---------------------------------------------------------------> <br>
               </div>
               </div>

                          <div class="form-group">
                          <div class="col-xs-6">
                          <label for="Preferred time">Preffered time</label>
                          <div class="input-group">
                       <select id="Preffered time" name="time" class="form-control">
                          <option value="1">Morning session, 10 am - 12 pm</option>
                          <option value="2">Evening session, 3 pm - 5 pm</option>
                          <option value="3">Night session, 8 pm - 10 pm</option>
                       </select>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

              </div>

<!----------------------------break-------------------------------------------------------------> <br>

                   </div>
                </div>

                  <div class="form-group">
                  <div class="input-group-addon">
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-center"
                  >

                  </div>
                </div>
                </form>
              </div><!---modal-body--->
          </div>
       </div>


<script type="text/javascript">

</script>
</body>
</html>
