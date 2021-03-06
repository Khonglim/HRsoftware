<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
<script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title> print report  </title>
<style type="text/css">
 body {
           
           font-size: 14px;
       }
       .page-break {
           page-break-after: always;
       }
       table {
           border-collapse: collapse;
           width: 100%;
           font-size: 14px;
       }
       td,
       th {
           border: 1px solid;
       }
       .font {
           font-size: 25px;
       }
       .pop {
           text-align: center;
       }
</style>
</head>
<body>
<div class="container">
    <br>
    <center> <img src="{{ url('img/NGG-10.jpg') }}" width="100px" height="100px"></center>
    @if ($operate->degree_enable == 1)
    <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับบังคับบัญชา</h2>
    @else
    <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับปฏิบัติการ</h2>
    @endif
   
    <div class="font" style="text-align:center;"><b>คำแนะนำวิธีการกรอกแบบประเมินผลการทดลองงาน</b></div>
    <b>1. ระดับในการประเมินผล</b><br>
    &emsp;&emsp;4 ดีมาก = ผลการปฎิบัติงานดีเยี่ยม สูงกว่าเกณฑ์มาตรฐานมาก<br>
    &emsp;&emsp;3 ดี = ผลการปฎิบัติงานดี ได้ตามมาตรฐานที่กำหนดไว้<br></dd>
    &emsp;&emsp;2 พอใช้ = ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้ แต่ยังสามารถจะพัฒนาศักยภาพได้<br>
    &emsp;&emsp;1 ต้องปรับปรุง = ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้มาก ยังต้องมีการปรับปรุงอีกมาก<br>
    <b>2.การประเมินผลให้แยกประเมินผลตามหัวข้อประเมิน และคิดคะแนนรวมดังนี้</b><br>
    &emsp;&emsp;2.1. ระดับพนักงานทั่วไป ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-15. <u>ได้ผลรวมคะแนนเท่าไหร่ ให้คูณด้วย 100หาร60</u><br>
    &emsp;&emsp;2.2. ระดับหัวหน้างานขึ้นไป ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-25 <br>
    <b>3. ผู้ถูกประเมินจะต้องได้ 60คะแนน ขึ้นไป จึงจะผ่านเกณฑ์การประเมินผลการทดลองงาน</b><br>
    <b>4. เขียนเครื่องหมาย <i class="material-icons">check_box</i> ลงในช่องประเมินผล ตามผลการปฏิบัติงานที่ประเมินได้</b><br>
    <b>5. ผู้ประเมินแจ้งให้ผู้ถูกประเมินทราบล่วงหน้าก่อนวันครบรอบกำหนดทดลองงาน 119 วัน <u>โดยให้แจ้งผู้ถูกประเมินไม่น้อยกว่า30วัน ก่อนการจ่ายค่าจ้างในรอบถัดไป</u></b><br><br><br>
    <div class="font"><b>บริษัท ในเครือ เอ็น จี จี กรุ๊ป</b></div>

    <div class="row">
        <div class="col-md-6">
            <font size="3"><b>ชื่อ-นามสกุล : </b>{{$operate->first_name}} </font>   
        </div>
        <div class="col-md-6">
            <font size="3"><b>รหัสพนักงาน : </b> {{$operate->new_id_employ}}</font>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <font size="3"><b>บริษัท:</b>   {{$operate->company}}</font>
        </div>
        <div class="col-md-6">
                <font size="3"><b>ตำแหน่ง : </b> {{$operate->new_position}}</font>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <font size="3"><b>แผนก/ฝ่าย : </b> {{$operate->new_department}}</font>
        </div>
        <div class="col-md-6">
                <font size="3"><b>ระดับ :</b> {{$operate->degree}}</font>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <font size="3"><b>วันที่เริ่มงาน : </b> {{$operate->starttime}}</font>
        </div>
        <div class="col-md-6">
                <font size="3"><b>ครบทดลองงาน 119 วัน วันที่ : </b> {{$operate->endtime}}</font>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
                <font size="3"><b>ประเมินครั้งที่1 : </b> {{$operate->date_60}}   </font>     
                </div>
        <div class="col-md-6">
                <font size="3"><b>ประเมินครั้งที่2 : วันที่ : </b> {{$operate->date_90}}</font>
            </div>
    </div> 
    <br>
    <table>
            <tr><th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย (การประเมิน 60 วัน)</th></tr>
            <tr>
                <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
                <td style="text-align:center">ลาป่วย(วัน)</td>
                <td style="text-align:center">ลากิจ (วัน)</td>
                <td style="text-align:center">ขาดงาน (วัน)</td>
                <td style="text-align:center">พักร้อน (วัน)</td>
                <td style="text-align:center">สาย (ครั้ง)</td>
                <td style="text-align:center">สาย (นาที)</td>
            </tr>
            <tr>
                <td>ตั้งแต่วันที่ :{{$operate->startwork_60}} <br>ถึงวันที่ :{{$operate->endwork_60}}</td>
                <td style="text-align:center">{{$operate->sick_leave_60}}</td>
                <td style="text-align:center">{{$operate->errand_leave_60}}</td>
                <td style="text-align:center">{{$operate->absence_60}}</td>
                <td style="text-align:center">{{$operate->vacation_60}}</td>
                <td style="text-align:center">{{$operate->line_terms_60}}</td>
                <td style="text-align:center">{{$operate->line_min_60}}</td>
            </tr>
        </table>
        <table>
            <tr><th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย (การประเมิน 90 วัน)</th></tr>
            <tr>
                <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
                <td style="text-align:center">ลาป่วย(วัน )</td>
                <td style="text-align:center">ลากิจ (วัน )</td>
                <td style="text-align:center">ขาดงาน (วัน )</td>
                <td style="text-align:center">พักร้อน (วัน )</td>
                <td style="text-align:center">สาย (ครั้ง)</td>
                <td style="text-align:center">สาย (นาที)</td>
            </tr>
            <tr>
                <td>ตั้งแต่วันที่ :{{$operate->startwork_60}} <br>ถึงวันที่ :{{$operate->endwork_60}}</td>
                <td style="text-align:center">{{$operate->sick_leave_90}}</td>
                <td style="text-align:center">{{$operate->errand_leave_90}}</td>
                <td style="text-align:center">{{$operate->absence_90}}</td>
                <td style="text-align:center">{{$operate->vacation_90}}</td>
                <td style="text-align:center">{{$operate->line_terms_90}}</td>
                <td style="text-align:center">{{$operate->line_min_90}}</td>
            </tr>
        </table> <br>
    @if ($operate->degree_enable == 1)
    <table>
        <tbody>
            <tr>
                <td align="center" rowspan="2">หัวข้อการประเมิน (100 คะแนน)<br>เงื่อนไขการให้คะแนนจะจัดแบ่งดังนี้<br>4 ดีมาก 3 ดี 2 พอใช้ 1 ต้องปรับปรุง</td>
                <td align="center" colspan="2">ระดับคะแนนการประเมินผล</td>
            </tr>
            <tr>
                <td align="center">ประเมินรอบ 60 วัน</td>
                <td align="center">ประเมินรอบ 90 วัน</td>
            </tr>
            <tr><td colspan="3"><b>ระดับผู้บังคับบัญชา (Supervisory Level)</b></td></tr>
            <tr>
                <td>1. คุณภาพของงานที่ปฏิบัติ</td>
                <td align="center">{{$operate->chioce1_60}}</td>
                <td align="center">{{$operate->chioce1_90}}</td>
            </tr>
            <tr>
                <td>2. ปริมาณของงาน และเวลาที่ใช้ปฏิบัติงาน</td>
                <td align="center">{{$operate->chioce2_60}}</td>
                <td align="center">{{$operate->chioce2_90}}</td>
            </tr>
            <tr>
                <td>3. ความรับผิดชอบและไว้วางใจในการทำงาน</td>
                <td align="center">{{$operate->chioce3_60}}</td>
                <td align="center">{{$operate->chioce3_90}}</td>
            </tr>    
            <tr>
                <td>4. การปฏิบัติตามคำสั่ง และ คำแนะนำ</td>
                <td align="center">{{$operate->chioce4_60}}</td>
                <td align="center">{{$operate->chioce4_90}}</td>
            </tr>
            <tr>
                <td>5. การประพฤติตามระเบียบข้อบังคับของบริษัท</td>
                <td align="center">{{$operate->chioce5_60}}</td>
                <td align="center">{{$operate->chioce5_90}}</td>
            </tr>
            <tr>
                <td>6. ความซื่อสัตย์ และ น่าเชื่อถือไว้ใจ</td>
                <td align="center">{{$operate->chioce6_60}}</td>
                <td align="center">{{$operate->chioce6_90}}</td>
            </tr>
            <tr>
                <td>7. ความตั้งใจและความกระตือรือร้นในการทำงานให้สำเร็จ</td>
                <td align="center">{{$operate->chioce7_60}}</td>
                <td align="center">{{$operate->chioce7_90}}</td>
            </tr>
            <tr>
                <td>8. ความสามารถในการเรียนรู้งาน</td>
                <td align="center">{{$operate->chioce8_60}}</td>
                <td align="center">{{$operate->chioce8_90}}</td>
            </tr>
            <tr>
                <td>9. ความสามารถด้านการคิดริเริ่มสร้างสรรค์</td>
                <td align="center">{{$operate->chioce9_60}}</td>
                <td align="center">{{$operate->chioce9_90}}</td>
            </tr>
            <tr>
                <td>10. ความสามารถในการแก้ไขข้อบกพร่องของตนเอง</td>
                <td align="center">{{$operate->chioce10_60}}</td>
                <td align="center">{{$operate->chioce10_90}}</td>
            </tr>
            <tr>
                <td>11. การให้ความร่วมมือประสานงานและการทำงานเป็นทีมกับผู้อื่น</td>
                <td align="center">{{$operate->chioce11_60}}</td>
                <td align="center">{{$operate->chioce11_90}}</td>
            </tr>
            <tr>
                <td>12. ความสามารถในการแก้ไขปัญหาเฉพาะหน้าและตัดสินใจด้วยตนเอง</td>
                <td align="center">{{$operate->chioce12_60}}</td>
                <td align="center">{{$operate->chioce12_90}}</td>
            </tr>
            <tr>
                <td>13. ทัศนคติที่มีต่อบริษัท</td>
                <td align="center">{{$operate->chioce13_60}}</td>
                <td align="center">{{$operate->chioce13_90}}</td>
            </tr>
            <tr>
                <td>14. การใช้ทรัพย์สินและค่าใช้จ่ายของบริษัทอย่างประหยัดและปลอดภัย</td>
                <td align="center">{{$operate->chioce14_60}}</td>
                <td align="center">{{$operate->chioce14_90}}</td>
            </tr>
            <tr>
                <td>15. มีสุขภาพร่างกายพร้อมที่จะปฏิบัติงาน</td>
                <td align="center">{{$operate->chioce15_60}}</td>
                <td align="center">{{$operate->chioce15_90}}</td>
            </tr>
            <tr>
                <td>16. ความสามารถในการทำงานบังคับบัญชา การควบคุมระเบียบวินัย</td>
                <td align="center">{{$operate->chioce16_60}}</td>
                <td align="center">{{$operate->chioce16_90}}</td>
            </tr>
            <tr>
                <td>17. การมอบหมายงาน/ควบคุมงาน/ติดตามงาน</td>
                <td align="center">{{$operate->chioce17_60}}</td>
                <td align="center">{{$operate->chioce17_90}}</td>
            </tr>
            <tr>
                <td>18. การสอนงาน และการพัฒนาผู้ใต้บังคับบัญชา</td>
                <td align="center">{{$operate->chioce18_60}}</td>
                <td align="center">{{$operate->chioce18_90}}</td>
            </tr>
            <tr>
                <td>19. การกระตุ้นและการสร้างสรรค์การทำงานเป็นทีม</td>
                <td align="center">{{$operate->chioce19_60}}</td>
                <td align="center">{{$operate->chioce19_90}}</td>
            </tr>
            <tr>
                <td>20. ความสามารถด้านวางแผน/จัดระบบงาน/ขั้นตอนการทำงาน การบริหารเวลา</td>
                <td align="center">{{$operate->chioce20_60}}</td>
                <td align="center">{{$operate->chioce20_90}}</td>
            </tr>
            <tr>
                <td>21. ความสามารถในการแก้ไขปัญหาและการตัดสินใจในการบริหารงาน</td>
                <td align="center">{{$operate->chioce21_60}}</td>
                <td align="center">{{$operate->chioce21_90}}</td>
            </tr>
            <tr>
                <td>22. การมีมุมมอง/การปฏิบัติตามนโยบาย/เป้าหมาย โดยภาพรวมบริษัท</td>
                <td align="center">{{$operate->chioce22_60}}</td>
                <td align="center">{{$operate->chioce22_90}}</td>
            </tr>
            <tr>
                <td>23. ความสามารถในการรับแรงกดดัน สภาพบีบบังคับ</td>
                <td align="center">{{$operate->chioce23_60}}</td>
                <td align="center">{{$operate->chioce23_90}}</td>
            </tr>
            <tr>
                <td>24. ความสามารถในการเจรจาต่อรองและการโน้มน้าวจูงใจผู้ใต้บังคับบัญชา</td>
                <td align="center">{{$operate->chioce24_60}}</td>
                <td align="center">{{$operate->chioce24_90}}</td>
            </tr>
            <tr>
                <td>25. ความสามารถในการสรุปงานและการนำเสนองาน</td>
                <td align="center">{{$operate->chioce25_60}}</td>
                <td align="center">{{$operate->chioce25_90}}</td>
            </tr>
            <tr>
                <td colspan="3"><b>รวมคะแนนทั้งสิ้น</b> ประเมินครั้งที่ 1 : {{$operate->NumberDate_60}} วัน <u><font color="red">{{$operate->subtotal_60}}</font></u> คะแนน ประเมินครั้งที่ 2 : 90 วัน <u><font color="red">{{$operate->subtotal_90}}</font></u> คะแนน <b>(รวมกันหาร2) = <u><font color="red">{{$operate->subtotal_final}}</font></u> </b></td>
            </tr>
        </tbody>
    </table> 
    @else
    <table>
        <tbody>
            <tr>
                <td align="center" rowspan="2">หัวข้อการประเมิน (100 คะแนน)<br>เงื่อนไขการให้คะแนนจะจัดแบ่งดังนี้<br>4 ดีมาก 3 ดี 2 พอใช้ 1 ต้องปรับปรุง</td>
                <td align="center" colspan="2">ระดับคะแนนการประเมินผล</td>
            </tr>
            <tr>
                <td align="center">ประเมินรอบ 60 วัน</td>
                <td align="center">ประเมินรอบ 90 วัน</td>
            </tr>
            <tr>
                <td colspan="3"><b>ระดับปฏิบัติการ (Operational Level)</b></td>
            </tr>
            <tr>
                <td>1. คุณภาพของงานที่ปฏิบัติ</td>
                <td align="center">{{$operate->chioce1_60}}</td>
                <td align="center">{{$operate->chioce1_90}}</td>
            </tr>
            <tr>
                <td>2. ปริมาณของงาน และเวลาที่ใช้ปฏิบัติงาน</td>
                <td align="center">{{$operate->chioce2_60}}</td>
                <td align="center">{{$operate->chioce2_90}}</td>
            </tr>
            <tr>
                <td>3. ความรับผิดชอบและไว้วางใจในการทำงาน</td>
                <td align="center">{{$operate->chioce3_60}}</td>
                <td align="center">{{$operate->chioce3_90}}</td>
            </tr>
            <tr>
                <td>4. การปฏิบัติตามคำสั่ง และ คำแนะนำ</td>
                <td align="center">{{$operate->chioce4_60}}</td>
                <td align="center">{{$operate->chioce4_90}}</td>
            </tr>
            <tr>
                <td>5. การประพฤติตามระเบียบข้อบังคับของบริษัท</td>
                <td align="center">{{$operate->chioce5_60}}</td>
                <td align="center">{{$operate->chioce5_90}}</td>
            </tr>
            <tr>
                <td>6. ความซื่อสัตย์ และ น่าเชื่อถือไว้ใจ</td>
                <td align="center">{{$operate->chioce6_60}}</td>
                <td align="center">{{$operate->chioce6_90}}</td>
            </tr>
            <tr>
                <td>7. ความตั้งใจและความกระตือรือร้นในการทำงานให้สำเร็จ</td>
                <td align="center">{{$operate->chioce7_60}}</td>
                <td align="center">{{$operate->chioce7_90}}</td>
            </tr>
            <tr>
                <td>8. ความสามารถในการเรียนรู้งาน</td>
                <td align="center">{{$operate->chioce8_60}}</td>
                <td align="center">{{$operate->chioce8_90}}</td>
            </tr>
            <tr>
                <td>9. ความสามารถด้านการคิดริเริ่มสร้างสรรค์</td>
                <td align="center">{{$operate->chioce9_60}}</td>
                <td align="center">{{$operate->chioce9_90}}</td>
            </tr>
            <tr>
                <td>10. ความสามารถในการแก้ไขข้อบกพร่องของตนเอง</td>
                <td align="center">{{$operate->chioce10_60}}</td>
                <td align="center">{{$operate->chioce10_90}}</td>
            </tr>
            <tr>
                <td>11. การให้ความร่วมมือประสานงานและการทำงานเป็นทีมกับผู้อื่น</td>
                <td align="center">{{$operate->chioce11_60}}</td>
                <td align="center">{{$operate->chioce11_90}}</td>
            </tr>
            <tr>
                <td>12. ความสามารถในการแก้ไขปัญหาเฉพาะหน้าและตัดสินใจด้วยตนเอง</td>
                <td align="center">{{$operate->chioce12_60}}</td>
                <td align="center">{{$operate->chioce12_90}}</td>
            </tr>
            <tr>
                <td>13. ทัศนคติที่มีต่อบริษัท</td>
                <td align="center">{{$operate->chioce13_60}}</td>
                <td align="center">{{$operate->chioce13_90}}</td>
            </tr>
            <tr>
                <td>14. การใช้ทรัพย์สินและค่าใช้จ่ายของบริษัทอย่างประหยัดและปลอดภัย</td>
                <td align="center">{{$operate->chioce14_60}}</td>
                <td align="center">{{$operate->chioce14_90}}</td>
            </tr>
            <tr>
                <td>15. มีสุขภาพร่างกายพร้อมที่จะปฏิบัติงาน</td>
                <td align="center">{{$operate->chioce15_60}}</td>
                <td align="center">{{$operate->chioce15_90}}</td>
            </tr>
            <tr>
                <td colspan="3"><b>รวมคะแนนทั้งสิ้น</b> ประเมินครั้งที่ 1 : {{$operate->NumberDate_60}} วันได้ <u><font color="red">{{$operate->subtotal_60}}</font></u>                    คะแนน ประเมินครั้งที่ 2 : 90 วันได้ <u><font color="red">{{$operate->subtotal_90}} </font></u>คะแนน
                    <b>(รวมกันหาร2) = <u><font color="red">{{$operate->subtotal_final}}</font></u></b></td>
            </tr>
        </tbody>
    </table>


    @endif
    
    
    <br>
    <b>ความคิดเห็นเพิ่มเติม การประเมิน 60 วัน (สำหรับผู้ประเมิน)</b><br>
        <table>
            <tbody>
                <tr>
                    <td align="center">ความคิดเห็นการประเมิน 60 วัน</td>
                    <td>{{$operate->comments_60}}</td>
                </tr>
                <tr>
                    <td align="center">ความคิดเห็นการประเมิน 90 วัน</td>
                    <td>{{$operate->comments_90}}</td>
                </tr>
            </tbody>
        </table> <br>
        <table>
            <tbody>
                <tr>
                    <td colspan="3">
                        <b>จุดเด่นของพนักงาน :</b> {{$operate->comments_featured}}<br>
                        <b>จุดด้อยของพนักงาน :</b> {{$operate->comments_weakness}} <br>
                            @if($operate->experimental == 'ไม่ผ่านทดลองงาน')
                            <i class="material-icons">check_box</i>{{$operate->experimental}} ให้มีผลบังคับตั้งแต่วันที่ : {{$operate->experimental_date}} <br>
                        @endif 
                            @if($operate->full_time_worker == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                            <i class="material-icons">check_box</i>{{$operate->full_time_worker}} ตั้งแต่วันที่ : {{$operate->full_time_worker_date}} ตำแหน่ง : {{$operate->full_time_worker_position}} <br>
                        @endif 
                            @if($operate->modify == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                            <i class="material-icons">check_box</i>{{$operate->modify}} และปรับตำแหน่ง จากตำแหน่ง : {{$operate->modify_position1}} เป็นตำแหน่ง : {{$operate->modify_position2}} ตั้งแต่วันที่ : {{$operate->modify_date}} <br>
                         @endif 
                            @if($operate->other_90 == 'อื่นๆ')
                            <i class="material-icons">check_box</i>{{$operate->other_90}} : {{$operate->other_com_90}}
                        @endif
                    </td>
                </tr>
                <tr>
                        <td align="center">
                                <br>
                                <div class="sig0">
                                        <div class="sigWrapper">
                                        
                                          <canvas class="pad" width="220" height="70"></canvas>
                                        </div>
                                   
                                      </div>
                                <br> ( คุณ{{$operate->name_rate_60}} ) 
                                <br>ผู้บังคับบัญชาต้นสังกัด
                                <br>วันที่การประเมิน {{$operate->date60T}} น.
                                <br>การประเมิน 60 วัน	
                                    
                            </td>
                    <td align="center">
                        <br>
                        <div class="sig1">
                                <div class="sigWrapper">
                                
                                  <canvas class="pad" width="220" height="70"></canvas>
                                </div>
                           
                              </div>
                        <br> ( คุณ{{$operate->name_rate_90}} ) 
                        <br>ผู้บังคับบัญชาต้นสังกัด
                        <br>วันที่การประเมิน {{$operate->date90T}} น.
                        <br>การประเมิน 90 วัน	
                        	
                    </td>
                    <td align="center">
                        <br>
                        <br> ผู้ถูกประเมิน : ........................................... <br> 
                        ( คุณ) <br>พนักงานผู้ถูกประเมิน<br>วันที่การประเมิน....../....../......</td>
                </tr>  
            </tbody>
            </table> 
            
            
            <br>
            <table>
                <tbody>
                    <tr><td align="center" colspan="4"><b>เฉพาะผู้จัดการฝ่าย เป็นผู้ประเมิน (100 คะแนน)</b></td></tr>
                    <tr>
                        <td></td>    
                        <td align="center" colspan="3"><b>ระบุคะแนน</b></td>
                    </tr>    
                    <tr>
                        <td align="center"><b>หัวข้อการประเมิน</b></td>
                        <td align="center">10-8 ดี</td>
                        <td align="center">7-5 พอใช้</td>
                        <td align="center">4-1 ปรับปรุง</td>
                    </tr>
                    <tr>
                        <td>1.บุคลิกภาพ และการแต่งกาย</td>
                        <td align="center">@if($operate->chioce_suitability1 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability1}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability11 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability11}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability21 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability21}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>2.ความสุภาพ กิริยา มารยาท</td>
                        <td align="center">@if($operate->chioce_suitability2 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability2}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability12 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability12}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability22 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability22}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>3.ความเคร่งครัดต่อระเบียบวินัย</td>
                        <td align="center">@if($operate->chioce_suitability3 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability3}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability13 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability13}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability23 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability23}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>4.ความตรงต่อเวลา</td>
                        <td align="center">@if($operate->chioce_suitability4 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability4}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability14 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability14}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability24 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability24}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>5.การประพฤติต่อผู้บังคับบัญชา</td>
                        <td align="center">@if($operate->chioce_suitability5 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability5}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability15 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability15}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability25 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability25}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>6.ทัศนคติต่องาน / บริษัท</td>
                        <td align="center">@if($operate->chioce_suitability6 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability6}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability16 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability16}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability26 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability26}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>7.การช่วยเหลือเพื่อนร่วมงาน</td>
                        <td align="center">@if($operate->chioce_suitability7 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability7}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability17 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability17}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability27 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability27}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>8.ลักษณะความเป็นผู้นำ</td>
                        <td align="center">@if($operate->chioce_suitability8 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability8}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability18 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability18}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability28 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability28}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>9.ความคิดริเริ่ม สร้างสรรค์</td>
                        <td align="center">@if($operate->chioce_suitability9 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability9}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability19 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability19}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability29 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability29}}        
                        @endif</td>
                    </tr>
                    <tr>
                        <td>10.ความคิดเห็นโดยทั่วไป</td>
                        <td align="center">@if($operate->chioce_suitability10 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability10}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability20 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability20}}        
                        @endif</td>
                        <td align="center">@if($operate->chioce_suitability30 == 0)
                            - 
                        @else
                            {{$operate->chioce_suitability30}}        
                        @endif</td>
                    </tr>
                    <tr><td colspan="4"><b>รวมคะแนน :</b><font color="red"> {{$operate->sum_chioce_suitability10}}</font> คะแนน</td></tr>
                </tbody>    
            </table> <br>
            <table><tr><td><b>ความคิดเห็นเพิ่มเติม : </b>{{$operate->comment_suitability10}} <br>
                @if($operate->ok_suitability == 'อนุมัติตามผู้บังคับบัญชาเสนอ')
                <i class="material-icons">check_box</i> {{$operate->ok_suitability}} <br>
                @endif 
                @if($operate->other_suitability == 'อื่นๆ')
                <i class="material-icons">check_box</i> {{$operate->other_suitability}} : {{$operate->other_com_suitability}} <br>
                @endif
                @if($operate->namerate_suitability != '')
                    <center><br>
                        
                        <div class="sig2">
                                <div class="sigWrapper">
                           
                                    <canvas class="pad" width="220" height="70"></canvas>
                                  </div>
                             
                                </div>
                   
                        <br>( คุณ{{$operate->namerate_suitability}} )<br>
                        
                        วันที่การประเมิน {{$operate->dateL}}</p>
                    </center>
                @endif  
            </td>
        </tr>
    </table> 
    <br> 
                <table>
                    <tbody>
                        <tr><td colspan="3" align="center"><b>สรุปผลการประเมิน</b></td></tr>
                        <tr>
                            <td align="center">ประเภทการประเมิน</td>
                            <td align="center">คะแนนเต็ม</td>
                            <td align="center">คะแนนที่ได้</td>
                        </tr>
                        <tr>
                            <td>1. การประเมินผลการปฏิบัติงานโดย <b>ผู้บังคับบัญชา</b></td>
                            <td align="center">100</td>
                            <td align="center">{{$operate->subtotal_final}}</td>
                        </tr>
                        <tr>
                            <td>1. การประเมินผลการปฏิบัติงานโดย <b>ผู้จัดการฝ่าย</b></td>
                            <td align="center">100</td>
                            <td align="center">{{$operate->sum_chioce_suitability10}}</td>
                        </tr>
                        <tr>
                            <td align="center">รวมคะแนนทั้งสิ้น</td>
                            <td align="center">200</td>
                            <td align="center">{{$operate->sum_chioce_suitability10  + $operate->subtotal_final }}</td>
                        </tr>
                    </tbody>
                </table> <br>
                <table>
                    <tbody>
                        <tr><td align="center"><b>เฉพาะฝ่ายทรัพยากรบุคคล</b></td></tr>
                        <tr>
                            <td>
                                    @if($operate->human_resource_ok == 'บรรจุเป็นพนักงานประจำ')
                                    <i class="material-icons">check_box</i> ให้บรรจุเป็นพนักงานประจำ
                                    @endif
                                    @if($operate->human_resource_modi == 'ปรับอัตราเงินเดือน')
                                    <i class="material-icons">check_box</i> ปรับอัตราเงินเดือน <u>{{$operate->human_resource_commo}}</u>
                                    <br>@endif
                                    @if($operate->human_resource_nodi == 'ยังไม่ปรับเงินเดือน')
                                    <i class="material-icons">check_box</i> ยังไม่ปรับอัตราเงินเดือน <u>{{$operate->human_resource_comno}}</u>
                                    <br>@endif
                                    @if($operate->human_resource_adjust == 'ให้ปรับตำแหน่งเป็น')
                                    <i class="material-icons">check_box</i> ให้ปรับตำแหน่งเป็น <u>{{$operate->human_resource_posi}}</u> และปรับเงินเดือน
                                    <br>@endif
                                    @if($operate->human_resource_fail == 'ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่:')
                                    <i class="material-icons">check_box</i> ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่: <u> {{$operate->human_resource_date}}</u>
                                    <br>@endif 
                                    @if($operate->human_resource_other == 'อื่นๆ')
                                    <i class="material-icons">check_box</i> อื่นๆ <u>{{$operate->human_resource_othercom}}</u>
                                    <br>@endif 
                            </td>
                             <tr>
                                 <td align="center">
                                     <br> <br>
                                        <div class="sig3">
                                                <div class="sigWrapper">
                                                
                                                  <canvas class="pad" width="220" height="70"></canvas>
                                                </div>
                                           
                                              </div>
                                 @if($operate->human_resource_nre != '')
                               ( คุณ{{$operate->human_resource_nre}} )
                               <br>วันที่การประเมิน {{$operate->dateS}} น.
                                @endif
                            </td>
                        </tr>       
                    </tbody>
                </table> 
                <br> 
        <table>
            <tbody>
                <tr>
                    <td align="center">
                        <b>เฉพาะกรรมการผู้จัดการ/ผู้จัดการทั่วไป</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($operate->manager_resource_ok == 'อนุมัติตามผู้บังคับบัญชาเสนอ')
                        <i class="material-icons">check_box</i> ให้บรรจุเป็นพนักงานประจำ
                        @endif
                        @if($operate->manager_resource_modi == 'ปรับอัตราเงินเดือน')
                        <i class="material-icons">check_box</i> ปรับอัตราเงินเดือน {{$operate->manager_resource_comdi}}
                        <br>@endif
                        @if($operate->manager_resource_nodi == 'ยังไม่ปรับเงินเดือน')
                        <i class="material-icons">check_box</i> ยังไม่ปรับอัตราเงินเดือน {{$operate->manager_resource_comno}}
                        <br>@endif
                         @if($operate->manager_resource_adjust == 'ให้ปรับตำแหน่งเป็น')
                         <i class="material-icons">check_box</i> ให้ปรับตำแหน่งเป็น {{$operate->manager_resource_posi}} และปรับเงินเดือน
                        <br>@endif 
                        @if($operate->manager_resource_fail == 'ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่')
                        <i class="material-icons">check_box</i> ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่: {{$operate->manager_resource_date}}
                        <br>@endif 
                        @if($operate->manager_resource_other == 'อื่นๆ')
                        <i class="material-icons">check_box</i> อื่นๆ {{$operate->manager_resource_othercom}}
                        <br>@endif 
                        </td>
                    </tr>
                    <tr><td align="center">
                        <br>
                        <br>
                        <div class=" sig4">
                                <div class="sigWrapper">
                                
                                  <canvas class="pad" width="220" height="70"></canvas>
                                </div>
                           
                              </div>
                        @if($operate->manager_resource_nre != '')
                       ( คุณ{{$operate->manager_resource_nre}} )
                       
                       <br>วันที่การประเมิน {{$operate->dateM}} น.
                        @endif   
                    </td>
                </tr>
            </tbody>
        </table>
        
        <br>

        <input type="hidden" value="{{$operate->signa1_60}}" id="sig0">
        <input type="hidden" value="{{$operate->signa1_90}}" id="sig1">
        <input type="hidden" value="{{$operate->signa2}}" id="sig2">
        <input type="hidden" value="{{$operate->signa3}}" id="sig3">
        <input type="hidden" value="{{$operate->signa4}}" id="sig4">
   
</div>

<script>
    $(document).ready(function() {

        var  sing0  = document.getElementById("sig0").value;
        var  sing1  = document.getElementById("sig1").value;
        var  sing2  = document.getElementById("sig2").value;
        var  sing3  = document.getElementById("sig3").value;
        var  sing4  = document.getElementById("sig4").value;
   
    $('.sig0').signaturePad({displayOnly:true}).regenerate(sing0);

    $('.sig1').signaturePad({displayOnly:true}).regenerate(sing1);

      $('.sig2').signaturePad({displayOnly:true}).regenerate(sing2);

      $('.sig3').signaturePad({displayOnly:true}).regenerate(sing3);

      $('.sig4').signaturePad({displayOnly:true}).regenerate(sing4);

    });
  </script>
</body>
</html>