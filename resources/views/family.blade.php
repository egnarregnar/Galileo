<!doctype html>
<html>
    <head>
        <title>ระบบค้นหาสายรหัส TU80</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/assets/css/appload.css" />
        @include('meta_og')
    </head>
    <body>
        <div class="container landingpage_container">
            <div class="row mainrow">
                <div class="col-md-12">
                    <h1 class="page_title">สายรหัสลำดับที่ <b>{{ $rank }}</b></h1>
                    <?php $programs = [
                        "sc" => "วิทยาศาสตร์ - คณิตศาสตร์",
                        "am" => "ภาษา - คณิตศาสตร์ (ศิลป์คำนวณ)",
                        "af" => "ภาษา - ฝรั่งเศส",
                        "ad" => "ภาษา - เยอรมัน",
                        "aj" => "ภาษา - ญี่ปุ่น",
                        "as" => "ภาษา - สเปน",
                        "ac" => "ภาษา - จีน",
                        "ak" => "ภาษา - เกาหลี",
                    ]; ?>
                    <h3 class="text-light">แผนการเรียน{{ $programs[$program] }}</h3>
                    <hr />
                </div>
            </div>

            @if(count($family) === 0)
                <!-- ==== -->
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h3 class="text-muted text-light">แย่จัง ดูเหมือนจะยังไม่มีข้อมูลสำหรับสายรหัสนี้ <i class="fa fa-frown-o"></i></h3>
                    </div>
                </div>
                <!-- ==== -->
            @else
            <div class="row card-row">
                @foreach($family as $member)
                        <div class="col-md-6">
                            <div class="well">
                                <h5 class="text-semilight">
                                    <b class="text-pink">TU{{ $member['generation'] }}:</b> {{ $member['title'] }}{{ $member['fname'] }} {{ $member['lname'] }} @if (!empty($member['nickname']))({{ $member['nickname'] }}) @endif
                                </h5>
                                <hr />
                                <div class="row contactInfoRow">
                                    @if(!empty($member['contact']['facebook']))
                                        <div class="col-sm-6">
                                            <i class="fa fa-facebook"></i> {{ $member['contact']['facebook'] }}
                                        </div>
                                    @endif
                                    @if(!empty($member['contact']['twitter']))
                                        <div class="col-sm-6">
                                            <i class="fa fa-twitter"></i> {{ $member['contact']['twitter'] }}
                                        </div>
                                    @endif
                                    @if(!empty($member['contact']['email']))
                                        <div class="col-sm-6">
                                            <i class="fa fa-envelope"></i> {{ $member['contact']['email'] }}
                                        </div>
                                    @endif
                                    @if(!empty($member['contact']['line']))
                                        <div class="col-sm-6">
                                            <i class="fa fa-comment"></i> {{ $member['contact']['line'] }}
                                        </div>
                                    @endif
                                    @if(!empty($member['contact']['instagram']))
                                        <div class="col-sm-6">
                                            <i class="fa fa-instagram"></i> {{ $member['contact']['instagram'] }}
                                        </div>
                                    @endif
                                    @if(!empty($member['contact']['phone']))
                                        <div class="col-sm-6">
                                            <i class="fa fa-phone"></i> {{ $member['contact']['phone'] }}
                                        </div>
                                    @endif
                                    @if(!empty($member['room']))
                                        <div class="col-sm-6">
                                            <i class="fa fa-home"></i> ห้อง {{ $member['room'] }}
                                        </div>
                                    @endif
                                </div>
                                @if(!empty($member['message']))
                                    <br />
                                    <blockquote>
                                        {!! nl2br(e($member['message'])) !!}
                                    </blockquote>
                                @endif
                                <a class="btn btn-sm btn-success pull-right btnEditData" data-uid="{{ $member['_id'] }}">&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;</a>
                                <br />
                            </div>
                        </div>
                @endforeach
                </div>
            @endif

            <br />

            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-block btn-lg btn-primary" href="/">กลับไปหน้าหลัก / เพิ่มข้อมูลของคุณ</a>
                    <br /><br />
                </div>
            </div>

            <!-- =================== -->
            <div class="modal fade" id="editModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-user-plus"></i> เพิ่มข้อมูล</h4>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-10 col-md-offset-1">
                                      <h6>ข้อมูลหลัก (ช่องที่มีเครื่องหมาย '*' จำเป็นต้องระบุ)<br /></h6>
                                      <div class="form-horizontal">
                                          <div class="row">
                                              <div class="col-md-2" id="insertForm_titleGroup">
                                                  <span class="help-block">คำนำหน้าชื่อ <small>*</small></span>
                                                  <input class="form-control" id="insertForm_title" placeholder="มาดมัวแซล" type="text">
                                              </div>
                                              <div class="col-md-5" id="insertForm_fnameGroup">
                                                  <span class="help-block">ชื่อ <small>*</small></span>
                                                  <input class="form-control" id="insertForm_fname" placeholder="คอมพิวตราเซีย" type="text">
                                              </div>
                                              <div class="col-md-5" id="insertForm_lnameGroup">
                                                  <span class="help-block">นามสกุล <small>*</small></span>
                                                  <input class="form-control" id="insertForm_lname" placeholder="ดังฟอร์มาทีก" type="text">
                                              </div>
                                          </div>
                                          <br />
                                          <div class="row">
                                              <div class="col-md-3" id="insertForm_nicknameGroup">
                                                  <span class="help-block">ชื่อเล่น</span>
                                                  <input class="form-control" id="insertForm_nickname" placeholder="คอมพิวตราเซีย" type="text">
                                              </div>
                                              <div class="col-md-1" id="insertForm_generationGroup">
                                                  <span class="help-block">รุ่น <small>*</small></span>
                                                  <input class="form-control" id="insertForm_generation" placeholder="1" type="text">
                                              </div>
                                              <div class="col-md-2" id="insertForm_roomGroup">
                                                  <span class="help-block">ห้อง (ล่าสุด)</span>
                                                  <input class="form-control" id="insertForm_room" placeholder="404" type="text">
                                              </div>
                                              <div class="col-md-3" id="insertForm_rankGroup">
                                                  <span class="help-block">ลำดับที่ (ตอนสอบเข้า)<small>*</small></span>
                                                  <input class="form-control" id="insertForm_rank" placeholder="1" type="text">
                                              </div>
                                              <div class="col-md-3" id="insertForm_programGroup">
                                                  <span class="help-block">แผนการเรียน<small>*</small></span>
                                                  <select class="form-control" id="insertForm_program">
                                                      <option value="sc">วิทย์ - คณิต</option>
                                                      <option value="am">ภาษา - คณิตศาสตร์ (ศิลป์คำนวณ)</option>
                                                      <option value="af">ภาษา - ฝรั่งเศส</option>
                                                      <option value="ad">ภาษา - เยอรมัน</option>
                                                      <option value="aj">ภาษา - ญี่ปุ่น</option>
                                                      <option value="as">ภาษา - สเปน</option>
                                                      <option value="ac">ภาษา - จีน</option>
                                                      <option value="ak">ภาษา - เกาหลี</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <hr />
                                          <h6>ข้อมูลติดต่อ (ต้องระบุอย่างน้อย 1 ช่อง)<br /></h6>
                                          <div id="contactGroup">
                                              <div class="row">
                                                  <div class="col-md-4" id="insertForm_facebookGroup">
                                                      <span class="help-block"><i class="fa fa-facebook"></i> Facebook</span>
                                                      <input class="form-control" id="insertForm_facebook" placeholder="facebook.com/computrasia" type="text">
                                                  </div>
                                                  <div class="col-md-4" id="insertForm_twitterGroup">
                                                      <span class="help-block"><i class="fa fa-twitter"></i> Twitter</span>
                                                      <input class="form-control" id="insertForm_twitter" placeholder="@computrasia" type="text">
                                                  </div>
                                                  <div class="col-md-4" id="insertForm_emailGroup">
                                                      <span class="help-block"><i class="fa fa-envelope"></i> E-Mail</span>
                                                      <input class="form-control" id="insertForm_email" placeholder="computrasia@tucc.club" type="text">
                                                  </div>
                                              </div>
                                              <br />
                                              <div class="row">
                                                  <div class="col-md-4" id="insertForm_lineGroup">
                                                      <span class="help-block"><i class="fa fa-comment"></i> LINE</span>
                                                      <input class="form-control" id="insertForm_line" placeholder="computrasia.tucc" type="text">
                                                  </div>
                                                  <div class="col-md-4" id="insertForm_instagramGroup">
                                                      <span class="help-block"><i class="fa fa-instagram"></i> Instagram</span>
                                                      <input class="form-control" id="insertForm_instagram" placeholder="computrasia" type="text">
                                                  </div>
                                                  <div class="col-md-4" id="insertForm_phoneGroup">
                                                      <span class="help-block"><i class="fa fa-phone"></i> โทรศัพท์</span>
                                                      <input class="form-control" id="insertForm_phone" placeholder="090-123-4567" type="text">
                                                  </div>
                                              </div>
                                          </div>
                                          <hr />
                                          <h6>ฝากข้อความ <span class="text-muted">(ถึงพี่ๆ หรือน้องๆ)</span><br /></h6>
                                          <div class="row">
                                              <div class="col-md-12 form-horizontal">
                                                  <textarea class="form-control" id="insertForm_message" rows="4"></textarea>
                                              </div>
                                          </div>
                                          <hr />
                                          <div class="row">
                                              <div class="col-md-12" id="insertForm_passwordGroup">
                                                  <span class="help-block">รหัสผ่าน</span>
                                                  <input class="form-control" id="insertForm_password" placeholder="รหัสผ่านที่ตั้งไว้ตอนเพิ่มข้อมูล" type="password">
                                                  <span class="help-block" id="passwordHelpText"></span>
                                              </div>
                                          </div>
                                          <hr />
                                          <div class="row">
                                              <div class="col-md-12 form-horizontal">
                                                  <input id="insertForm_UID" type="hidden" />
                                                  <a class="btn btn-success btn-block" href="#" id="btnSubmitData"><i class="fa fa-floppy-o"></i> บันทึก</a>
                                              </div>
                                              <br /><br /><br />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
            <!-- =================== -->


        </div>
        <script src="/assets/js/jquery-3.1.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/bootbox.min.js"></script>

        <script>
            var hasErrors = 0;
            var csrfToken = "{{ csrf_token() }}";

            $(".btnEditData").click(function(e){
                e.preventDefault();
                var uid = $(this).data("uid");
                $("#insertForm_passwordGroup").removeClass("has-warning");
                $("#passwordHelpText").empty();

                var dialog = bootbox.dialog({
                    message: '<p class="text-center"><i class="fa fa-spinner fa-spin"></i> กำลังโหลดข้อมูล กรุณารอสักครู่...</p>',
                    closeButton: false
                });

                $.ajax({
                    url: "/students/" + uid,
                    data: {
                        _token: csrfToken,
                    },
                    error: function (request, status, error) {
                        dialog.modal('hide');
                        console.log(error);
                    },
                    dataType: "json",
                    success: function(data) {
                        dialog.modal('hide');
                        $("#insertForm_title").val(data.title);
                        $("#insertForm_fname").val(data.fname);
                        $("#insertForm_lname").val(data.lname);
                        $("#insertForm_nickname").val(data.nickname);
                        $("#insertForm_generation").val(data.generation);
                        $("#insertForm_room").val(data.room);
                        $("#insertForm_rank").val(data.rank);
                        $("#insertForm_program").val(data.program);
                        $("#insertForm_facebook").val(data.contact.facebook);
                        $("#insertForm_twitter").val(data.contact.twitter);
                        $("#insertForm_email").val(data.contact.email);
                        $("#insertForm_line").val(data.contact.line);
                        $("#insertForm_instagram").val(data.contact.instagram);
                        $("#insertForm_phone").val(data.contact.phone);
                        $("#insertForm_message").val(data.message);
                        $("#insertForm_UID").val(uid);
                        $("#editModal").modal("show");
                    },
                    type: "GET"
                });
            });

            $("#btnSubmitData").click(function(e){

                hasErrors = 0;
                $("#contactGroup").removeClass("has-warning");
                $("#insertForm_passwordGroup").removeClass("has-warning");
                $("#passwordHelpText").empty();

                e.preventDefault();

                var dialog = bootbox.dialog({
                    message: '<p class="text-center"><i class="fa fa-spinner fa-spin"></i> กำลังโหลดข้อมูล กรุณารอสักครู่...</p>',
                    closeButton: false
                });

                checkField("insertForm_title");
                checkField("insertForm_fname");
                checkField("insertForm_lname");
                checkField("insertForm_generation");
                checkField("insertForm_rank");

                var contactFieldsEntered = 0;
                if(isNotEmpty("insertForm_facebook")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_twitter")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_email")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_line")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_instagram")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_phone")){
                    contactFieldsEntered++;
                }

                if(contactFieldsEntered < 1){
                    hasErrors++;
                    $("#contactGroup").addClass("has-warning");
                }

                var uid = $("#insertForm_UID").val();

                if(hasErrors == 0){
                    $.ajax({
                           url: "/students/" + uid,
                           data: {
                               _token: csrfToken,
                               title: $("#insertForm_title").val(),
                               fname: $("#insertForm_fname").val(),
                               lname: $("#insertForm_lname").val(),
                               nickname: $("#insertForm_nickname").val(),
                               generation: parseInt($("#insertForm_generation").val()),
                               room: parseInt($("#insertForm_room").val()),
                               rank: parseInt($("#insertForm_rank").val()),
                               program: $("#insertForm_program").val(),
                               facebook: $("#insertForm_facebook").val(),
                               twitter: $("#insertForm_twitter").val(),
                               email: $("#insertForm_email").val(),
                               line: $("#insertForm_line").val(),
                               instagram: $("#insertForm_instagram").val(),
                               phone: $("#insertForm_phone").val(),
                               message: $("#insertForm_message").val(),
                               password: $("#insertForm_password").val(),
                               password_confirm: $("#insertForm_passwordConfirm").val(),
                           },
                           error: function (request, status, error) {
                               dialog.modal('hide');
                               switch(request.status){
                                   case 401:
                                        $("#insertForm_passwordGroup").addClass("has-warning");
                                        $("#passwordHelpText").html("<span class=\"text-warning\"><i class=\"fa fa-exclamation-triangle\"></i> รหัสผ่านสำหรับแก้ไขข้อมูลไม่ถูกต้อง</span>");
                                   break;
                                   default:
                                        console.log(error);
                               }
                           },
                           dataType: "json",
                           success: function(data) {
                               dialog.modal('hide');
                               var rankToGoTo = parseInt($("#insertForm_rank").val());
                               window.location.reload();
                           },
                           type: "PUT"
                    });
                }else{
                    dialog.modal('hide');
                }
            });
            function checkField(field){
                $("#" + field + "Group").removeClass("has-warning");
                if($.trim($("#" + field).val()) != "" && $("#" + field).val() !== null){
                    return true;
                }else{
                    $("#" + field + "Group").addClass("has-warning");
                    hasErrors++;
                    return false;
                }
            }
            function isNotEmpty(field){
                if($.trim($("#" + field).val()) != "" && $("#" + field).val() !== null){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        @include('analytic')
    </body>
</html>
