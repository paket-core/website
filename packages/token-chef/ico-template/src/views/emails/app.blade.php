<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{isset($subject) ? $subject : env('APP_COMPANY_NAME')}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 "/>
    <meta name="format-detection" content="telephone=no"/>
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!--<![endif]-->
    <style type="text/css">
        body {
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important;
        }

        img {
            border: 0 !important;
            outline: none !important;
        }

        p {
            Margin: 0px !important;
            Padding: 0px !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px;
            mso-table-rspace: 0px;
        }

        td, a, span {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        span.MsoHyperlink {
            mso-style-priority: 99;
            color: inherit;
        }

        span.MsoHyperlinkFollowed {
            mso-style-priority: 99;
            color: inherit;
        }
    </style>
    <style media="only screen and (min-width:481px) and (max-width:599px)" type="text/css">
        @media only screen and (min-width: 481px) and (max-width: 599px) {
            table[class=em_main_table] {
                width: 100% !important;
            }

            table[class=em_wrapper] {
                width: 100% !important;
            }

            td[class=em_hide], br[class=em_hide] {
                display: none !important;
            }

            img[class=em_full_img] {
                width: 100% !important;
                height: auto !important;
            }

            td[class=em_align_cent] {
                text-align: center !important;
            }

            td[class=em_aside] {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            td[class=em_height] {
                height: 20px !important;
            }

            td[class=em_font] {
                font-size: 14px !important;
            }

            td[class=em_align_cent1] {
                text-align: center !important;
                padding-bottom: 10px !important;
            }
        }
    </style>
    <style media="only screen and (max-width:480px)" type="text/css">
        @media only screen and (max-width: 480px) {
            table[class=em_main_table] {
                width: 100% !important;
            }

            table[class=em_wrapper] {
                width: 100% !important;
            }

            td[class=em_hide], br[class=em_hide], span[class=em_hide] {
                display: none !important;
            }

            img[class=em_full_img] {
                width: 100% !important;
                height: auto !important;
            }

            td[class=em_align_cent] {
                text-align: center !important;
            }

            td[class=em_align_cent1] {
                text-align: center !important;
                padding-bottom: 10px !important;
            }

            td[class=em_height] {
                height: 20px !important;
            }

            td[class=em_aside] {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            td[class=em_font] {
                font-size: 14px !important;
                line-height: 28px !important;
            }

            span[class=em_br] {
                display: block !important;
            }
        }
    </style>
</head>
<body style="margin:0px; padding:0px;" bgcolor="#f7f7f7">
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f7f7f7">
    <!-- === BODY SECTION=== -->
    <tr>
        <td align="center" valign="top" bgcolor="#f7f7f7">
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="em_main_table"
                   style="table-layout:fixed;">
                <!-- === LOGO SECTION === -->
                <tr>
                    <td height="40" class="em_height">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"><a href="#" target="_blank" style="text-decoration:none;"><img
                                    src="{{env('APP_URL')}}/images/logo/black/default.png" width="280" height="72"
                                    style="display:block;font-family: Arial, sans-serif; font-size:15px; line-height:18px; color:#30373b;  font-weight:bold;"
                                    border="0" alt="{{env('APP_COMPANY_NAME')}}"/></a></td>
                </tr>
                <tr>
                    <td height="40" class="em_height">&nbsp;</td>
                </tr>
                <!-- === //NEVIGATION SECTION === -->
                <!-- === IMG WITH TEXT AND COUPEN CODE SECTION === -->
                <tr>
                    <td valign="top" class="em_aside" bgcolor="#fff">
                        @yield('email_content')
                    </td>
                </tr>
                <!-- === //IMG WITH TEXT AND COUPEN CODE SECTION === -->
            </table>
        </td>
    </tr>
    <!-- === //BODY SECTION=== -->
    <!-- === FOOTER SECTION === -->
    <tr>
        <td align="center" valign="top" class="em_aside">
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="em_main_table"
                   style="table-layout:fixed;">
                <tr>
                    <td height="35" class="em_height">&nbsp;</td>
                </tr>
                <tr>
                    <td height="22" class="em_height">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"
                        style="font-family:'Open Sans', Arial, sans-serif; font-size:12px; line-height:18px; color:black;">
                        2018 {{env('APP_COMPANY_NAME')}}. All Rights Reserved.
                    </td>
                </tr>
                <tr>
                    <td height="35" class="em_height">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- === //FOOTER SECTION === -->
</table>
<div style="display:none; white-space:nowrap; font:20px courier; color:#ffffff; background-color:#ffffff;">&nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp;
</div>
</body>
</html>