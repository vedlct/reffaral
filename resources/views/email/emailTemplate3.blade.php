<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- TemplateBeginEditable name="doctitle" -->
    <title>Untitled Document</title>
    <!-- TemplateEndEditable -->
    <!-- TemplateBeginEditable name="head" -->
    <!-- TemplateEndEditable -->

    <style type="text/css">
        html { -webkit-text-size-adjust: none; -ms-text-size-adjust: none;}

        @media only screen and (min-device-width: 750px) {
            .table750 {width: 750px !important;}
        }
        @media only screen and (max-device-width: 750px), only screen and (max-width: 750px){
            table[class="table750"] {width: 100% !important;}
            .mob_b {width: 93% !important; max-width: 93% !important; min-width: 93% !important;}
            .mob_b1 {width: 100% !important; max-width: 100% !important; min-width: 100% !important;}
            .mob_left {text-align: left !important;}
            .mob_soc {width: 50% !important; max-width: 50% !important; min-width: 50% !important;}
            .mob_menu {width: 50% !important; max-width: 50% !important; min-width: 50% !important; box-shadow: inset -1px -1px 0 0 rgba(255, 255, 255, 0.2); }
            .mob_center {text-align: center !important;}
            .top_pad {height: 15px !important; max-height: 15px !important; min-height: 15px !important;}
            /*.mob_pad {width: 15px !important; max-width: 15px !important; min-width: 15px !important;}*/
            .mob_pad {width: 55% !important; max-width: 15px !important; min-width: 15px !important;}
            .mob_div {display: block !important;}
        }
        @media only screen and (max-device-width: 550px), only screen and (max-width: 550px){
            .mod_div {display: block !important;}
        }
        .table750 {width: 750px;}

        @font-face{
            font-family: 'Sans Serif';
            src: url({{url('scss/icons/font-awesome/fonts/d-din.regular.ttf')}}) format('truetype');
        }
    </style>
</head>

<body style="margin: 0; padding: 0;">
<form action="{{route('shareemail')}}" method="get">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: #ffffff; min-width: 350px; font-size: 1px; line-height: normal;">
        <tr>
            <td align="center" valign="top">
                <table cellpadding="0" cellspacing="0" border="0" width="800" class="table750" style="width: 100%; max-width: 750px; min-width: 350px;">
                    <tr>
                        <td class="mob_pad" width="615" height="124" bgcolor="#2EB8EE"> <h2 style="font-size:36px; color:#FFF;padding: 0 0 0 55px;  font-family:hhhh">Refer Your Friends &amp; Earn</h2></td>
                        <td width="135" align="right" bgcolor="#2EB8EE"> <img src="{{url('public/img/logo.jpg')}}" width="84" height="77" style="padding: 0 22px 29px 0;" /></td>
                    </tr>
                    <tr>
                        <td height="89" colspan="2" bgcolor="#FFFFFF">
                            <p style="font-size:13px; color:black;padding:0 55px 0 55px;font-family:hhhh;"><b>Invite your friends to use tech cloud's retouching services,</b></p>
                            <p style="font-size:13px; color:black;padding:0 55px 0 55px;font-family:hhhh;"><b>if your friend place an order you will get a $100 discount on your next invoice</b></p></td>
                    </tr>
                    <tr>
                        <td height="132" colspan="2" align="center" bgcolor="#FFFFFF">
                            <input type="hidden" value="{{$clt}}" name="clt">
                            <input type="hidden" value="{{$dicountCode}}" name="disCode">
                            <input type="hidden" value="{{$discountStartDate}}" name="disStartDate">
                            <input type="hidden" value="{{$discountEndDate}}" name="disEndDate">
                            <input type="hidden" value="{{$offerid}}" name="id">

                            <button type="submit"  style="background-color:#2FB8EC; color:#FFF;font-family:hhhh;width: 150px; height: 40px"><b>Invite your friends</b></button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" bgcolor="#FFFFFF"><p style="font-size:13px; color:black;font-family:hhhh"><b>*maximum $200 in a month</b></p></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
