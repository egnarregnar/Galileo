<!doctype html>
<html>
    <head>
        <title>ระบบค้นหาสายรหัส TU80</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/assets/css/appload.css" />
        <link rel="stylesheet" href="/assets/css/landing.css" />
        @include('meta_og')
    </head>
    <body>
        <div class="container landingpage_container">
            <div class="row mainrow">
                <div class="col-md-12">
                    <h1 class="landingpage_title">ระบบค้นหาสายรหัส <b>TU80</b></h1>
                </div>
            </div>
            <!-- =================== -->
            <div class="row landing_button_row">
                <div class="col-md-8 text-center">
                    <div class="form-horizontal">
                        <div class="col-xs-10 col-xs-offset-1">
                            <br />
                            <h4><i class="fa fa-search"></i> ค้นหาสายลำดับ</h4>
                            <div class="row form-group" id="searchGroup">
                                <div class="col-sm-6 novert">
                                    <br />
                                    <select class="form-control" id="searchProgram">
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
                                <div class="col-sm-3 novert">
                                    <br />
                                    <input class="form-control" id="searchQuery" name="searchQuery" placeholder="ลำดับที่..." type="text">
                                </div>
                                <div class="col-sm-3">
                                    <br />
                                    <a class="btn btn-block btn-primary" href="#" id="btnSearch">ค้นหา</a>
                                </div>
                            </div>
                            <span class="help-block" id="searchHelpText"><span>
                            {{ csrf_field() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="col-xs-10 col-xs-offset-1">
                        <br />
                        <h4><i class="fa fa-user-plus"></i> เพิ่มข้อมูล</h4>
                        <br />
                        <a class="btn btn-block btn-success" data-toggle="modal" data-target="#addDataModal">เพิ่มข้อมูลติดต่อของคุณ</a>
                    </div>
                </div>
            </div>
            <!-- =================== -->

            <div id="daFooter" class="footer navbar-fixed-bottom">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <span class="text-light">&copy; <?php echo(date("Y")); ?> <small class="text-muted">&#8226;</small> Crafted with <i class="fa fa-heart"></i> by <a href="https://namo.namodev.com" class="nuancedlink" target="_blank">@NamoDev</a> &amp; <a href="https://theminerdev.com" target="_blank" class="nuancedlink">@TheMiner3746</a> <small class="text-muted">&#8226;</small> ภาพโดย <a href="https://www.facebook.com/Cattofoto/" class="nuancedlink" target="_blank">Cattofoto</a> <small class="text-muted">&#8226;</small> <i class="fa fa-code"></i> on <a href="https://goo.gl/w22pGY" class="nuancedlink" target="_blank">GitHub</a> <small class="text-muted">&#8226;</small> <a href="#" id="dataPolicyLink" class="nuancedlink">Data Policy</a></span>
                        <br />
                        <span class="text-light">เว็บไซต์นี้ไม่ใช่เว็บประกาศผล และถูกสร้างขึ้นโดยนักเรียน (และศิษย์เก่า) โดยไม่มีส่วนเกี่ยวข้องกับโรงเรียนเตรียมอุดมศึกษาแต่อย่างใด</span>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>

        <!-- =================== -->
        <div class="modal fade" id="addDataModal" role="dialog">
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
                                      <h6><i class="fa fa-exclamation-triangle"></i> ระบบมีการเข้ารหัสทางเดียว และรหัสผ่านไม่สามารถเปลี่ยนได้ กรุณาตรวจสอบให้แน่ใจก่อนบันทึกข้อมูล<br /></h6>
                                      <div class="row">
                                          <div class="col-md-6" id="insertForm_passwordGroup">
                                              <span class="help-block">รหัสผ่านสำหรับการแก้ไขข้อมูล</span>
                                              <input class="form-control" id="insertForm_password" placeholder="รหัสผ่านที่จำได้ง่าย แต่เดาได้ยาก" type="password">
                                          </div>
                                          <div class="col-md-6" id="insertForm_passwordConfirmGroup">
                                              <span class="help-block">ยืนยันรหัสผ่าน</span>
                                              <input class="form-control" id="insertForm_passwordConfirm" placeholder="ยืนยันรหัสผ่านอีกครั้ง" type="password">
                                          </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                          <div class="col-md-12 form-horizontal text-center">
                                              <a class="btn btn-success btn-block" href="#" id="btnSubmitNewData"><i class="fa fa-floppy-o"></i> บันทึก</a>
                                              <span class="help-block" style="margin-top:10px;"><i class="fa fa-globe"></i> ข้อมูลจะถูกแชร์เป็นสาธารณะ ( เพื่อให้น้องๆ สามารถตามหาเพื่อนร่วมสายลำดับได้ )<br /></span>
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
        <div class="modal fade" id="dataPolicyModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><i class="fa fa-legal"></i> Data Policy <span class="text-muted pull-right" style="margin-right:20px;">อัพเดตล่าสุดเมื่อ 04/05/2017</span></h4>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-sm-10 col-sm-offset-1">
                                  <p style="font-size:1.3em;font-weight:300;">เราให้อำนาจคุณในการแชร์ข้อมูล ซึ่งเป็นภารกิจของเราในการทำให้น้องๆ สายลำดับสามารถพบกับพี่ๆ ได้สะดวกและง่ายยิ่งขึ้น นโยบายนี้อธิบายว่าข้อมูลอะไรบ้างที่เรารวบรวม และข้อมูลนั้นมีการใช้งานอย่างไร</p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-10 col-sm-offset-1">
                                <h4 class="text-light">เราเก็บรวบรวมข้อมูลประเภทใดบ้าง</h4>
                                <p>เราเก็บรวมรวมข้อมูลประเภทต่างๆ จากคุณหรือเกี่ยวกับตัวคุณ ทั้งนี้โดยขึ้นอยู่กับว่าคุณใช้บริการใด</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="well">
                                            <small><b>สิ่งที่คุณทำ และข้อมูลที่คุณให้</b></small>
                                            <p>
                                                เราเก็บรวบรวมเนื้อหาและข้อมูลอื่นๆ ที่คุณให้เมื่อคุณใช้บริการของเรา โดยรวมถึงเมื่อคุณเพิ่มข้อมูลติดต่อเข้าในระบบของเรา ข้อมูลเหล่านี้อาจรวมถึงข้อมูลที่อยู่ในเนื้อหาที่คุณให้ เช่นการฝากข้อความ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="well">
                                            <small><b>ข้อมูลของอุปกรณ์ และการเชื่อมต่อเครือข่าย</b></small>
                                            <p>
                                                เราเก็บรวบรวมข้อมูลที่มาจาก หรือเกี่ยวกับคอมพิวเตอร์ โทรศัพท์ หรืออุปกรณ์อื่นๆ ที่คุณใช้ในการเข้าถึงบริการของเรา ตัวอย่างบางส่วนของข้อมูลอุปกรณ์ที่เราเก็บรวบรวม เช่น:
                                            </p>
                                            <ul>
                                                <li>ข้อมูลการเชื่อมต่อ เช่น ชื่อของผู้ให้บริการเครือข่าย ประเภทเบราว์เซอร์ ภาษาและเขตเวลา และที่อยู่ IP (IP address)</li>
                                                <li>แอตทริบิวต์ต่างๆ เช่น ระบบปฏิบัติการ ขนาดและความละเอียดของหน้าจอ เวอร์ชันของซอฟต์แวร์และฮาร์ดแวร์</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-10 col-sm-offset-1">
                                <h4 class="text-light">ข้อมูลนี้มีการแชร์อย่างไร</h4>
                                <p>จุดมุ่งหมายของเราคือการทำให้น้องลำดับและพี่ๆ สามารถพบกันได้ง่ายยิ่งขึ้น<br />ซึ่งเราทำให้เป็นไปได้โดยการแชร์ข้อมูลของคุณในรูปแบบต่อไปนี้:</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="well">
                                            <small><b>จัดเก็บข้อมูลเพื่อการค้นหาแบบสาธารณะ</b></small>
                                            <p>
                                                เมื่อคุณบันทึกข้อมูลติดต่อโดยใช้บริการของเรา เราจะทำการบันทึกข้อมูลนั้น และจัดเก็บเข้าสู่ฐานข้อมูลสายลำดับ ซึ่งเป็นฐานข้อมูลสาธารณะที่สามารถค้นหาได้ (โดยการค้นหาด้วยลำดับ) และเปิดเผยต่อทุกคนทั้งในหรือนอกบริการของเรา
                                                <br /><br />
                                                เรามีการใช้มาตรการทางเทคนิคในการป้องกันไม่ให้เครื่องมือค้นหาออนไลน์และโปรแกรมอัตโนมัติทำการจัดเก็บ (index) ข้อมูลสายลำดับ และข้อมูลติดต่อ โดยมีข้อยกเว้นคือระบบจัดเก็บข้อมูลทางประวัติศาสตร์ของ Internet Archive <a href="https://archive.org" target="_blank">(https://archive.org)</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-10 col-sm-offset-1">
                                <h4 class="text-light">เราใช้ข้อมูลนี้อย่างไร</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="well">
                                            <small><b>ให้บริการ ปรับปรุงบริการ และพัฒนาบริการ</b></small>
                                            <p>
                                                <ul>
                                                    <li>เราสามารถส่งมอบบริการแก่คุณได้ โดยการใช้ข้อมูลนี้เพื่อทำความเข้าใจว่าคุณใช้และโต้ตอบกับบริการของเราอย่างไร</li>
                                                    <li>เราวิเคราะห์ข้อมูลที่เรามี เพื่อทำการประเมิน และปรับปรุงการให้บริการของเรา รวมไปถึงการตรวจสอบและการแก้ไขปัญหาต่างๆ</li>
                                                    <li>ข้อมูลที่จัดเก็บจะถูกรักษาไว้เป็นความลับ ยกเว้นในส่วนของข้อมูลติดต่อ ซึ่งเป็นสาธารณะและสามารถค้นหาได้จากหน้าเว็บของเรา</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="well">
                                            <small><b>คำขอทางกฎหมาย</b></small>
                                            <p>
                                                เราอาจเข้าถึง รักษา และแชร์ข้อมูลของคุณเพื่อตอบสนองต่อคำขอตามกฎหมาย (เช่น หมายค้น คำสั่งศาล หรือหมายเรียก) หากเราเชื่อโดยสุจริตว่ากฎหมายต้องการให้เราทำเช่นนั้น และสอดคล้องกับมาตรฐานที่ยอมรับกันโดยสากล
                                                <br /><br />
                                                จนถึง ณ วันนี้ เรายังไม่เคยรับคำขอเพื่อเปิดเผยข้อมูลจากหน่วยงานราชการใดๆ หากเราได้รับคำขอเช่นนั้น เราจะพยายามอย่างที่สุดในการแจ้งให้สาธารณะทราบถึงคำขอนั้น
                                            </p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <hr />
                          <div class="row">
                              <div class="col-sm-10 col-sm-offset-1">
                                  <div class="well">
                                      <small><b>ความปลอดภัยของข้อมูล</b></small>
                                      <p>เรามีการใช้มาตรการทางเทคนิคตามมาตรฐานความปลอดภัยที่ได้รับการยอมรับโดยสากล เพื่อรักษาความปลอดภัยของระบบ เช่น: </p>
                                      <ul>
                                          <li>การเข้ารหัสข้อมูลระหว่างการส่งผ่านเครือข่าย โดยมาตรฐาน TLS (transport layer security) เพื่อป้องกันการดักจับข้อมูลระหว่างการส่งผ่านเครือข่าย</li>
                                          <li>การจัดเก็บรหัสผ่านแบบเข้ารหัสทางเดียว (hash) ด้วยอัลกอริทึมที่ได้รับการยอมรับโดยสากล เพื่อป้องกันรหัสผ่านรั่วไหล</li>
                                      </ul>
                                  </div>
                                  <div class="well">
                                      <small><b>Disclaimer</b></small>
                                      <p>เว็บไซต์นี้ไม่ใช่เว็บประกาศผล และไม่มีส่วนเกี่ยวข้องกับโรงเรียนเตรียมอุดมศึกษาแต่อย่างใด</p>
                                      <p>อนึ่ง ข้อมูลในระบบนี้ ถูกสร้างขึ้นจากการกรอกข้อมูลของแต่ละบุคคลด้วยตนเอง เราไม่มีนโยบายในการสร้างหรือนำข้อมูลจากแหล่งอื่นๆ เข้ามาในระบบ และเราไม่สามารถยืนยันหรือตรวจสอบได้ว่าข้อมูลในระบบเป็นจริงหรือเท็จแต่ประการใด</p>
                                  </div>
                                  <h6 class="text-light"><i class="fa fa-asterisk"></i> เราใช้คุกกี้และเทคโนโลยีอื่นที่คล้ายคลึงกันในการให้และสนับสนุนบริการของเรา ซึ่งรวมถึง แต่ไม่จำกัดเพียง การยืนยันตัวตนและสิทธิ์การใช้งานของผู้ใช้ การรักษาความปลอดภัย และการวิเคราะห์การใช้งานระบบ (analytics)</h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <!-- =================== -->
        <script src="/assets/js/jquery-3.1.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/bootbox.min.js"></script>
        <script>

            var hasErrors = 0;

            $(function(){
                adjustFooter();
            });

            $(window).on('resize', function(){
                adjustFooter();
            });

            function adjustFooter(){
                if ($(window).width() < 767){
                    $("#daFooter").removeClass("navbar-fixed-bottom");
                    $("#daFooter").css({"margin-top": "70px"});
                }else{
                    $("#daFooter").addClass("navbar-fixed-bottom");
                    $("#daFooter").css({"margin-top": "0px"});
                }
            }

            $("#dataPolicyLink").click(function(e){
                e.preventDefault();
                $("#dataPolicyModal").modal("show");
                ga("send", "pageview", "/data-policy");
            });

            $("#btnSearch").click(function(e){
                e.preventDefault();
                $("#searchGroup").removeClass("has-warning");
                $("#searchHelpText").empty();

                var rank = parseInt($("#searchQuery").val());
                if(!isNaN(rank)){
                    window.location.href = "/families/" + $("#searchProgram").val() + "/" + rank;
                }else{
                    $("#searchGroup").addClass("has-warning");
                    $("#searchHelpText").html("<span class=\"text-warning\"><i class=\"fa fa-exclamation-triangle\"></i> ข้อมูลต้องเป็นตัวเลขเท่านั้น</span>");
                }
            });
            $("#searchQuery").keyup(function(e){
                if(e.keyCode == 13){
                    $("#btnSearch").click();
                }
            });
            $("#btnSubmitNewData").click(function(e){

                hasErrors = 0;
                $("#contactGroup").removeClass("has-warning");

                e.preventDefault();
                var csrfToken = "{{ csrf_token() }}";

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

                checkField("insertForm_password");
                checkField("insertForm_passwordConfirm");

                if($("#insertForm_passwordConfirm").val() != $("#insertForm_password").val()){
                    $("#insertForm_passwordGroup").addClass("has-warning");
                    $("#insertForm_passwordConfirmGroup").addClass("has-warning");
                    hasErrors++;
                }

                if(hasErrors == 0){
                    $.ajax({
                           url: "/students",
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
                               console.log(error);
                           },
                           dataType: "json",
                           success: function(data) {
                               dialog.modal('hide');
                               var rankToGoTo = parseInt($("#insertForm_rank").val());
                               window.location.href = "/families/" + $("#insertForm_program").val() + "/" + rankToGoTo;
                           },
                           type: "POST"
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
