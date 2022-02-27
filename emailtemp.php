<?php
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Forgot Password</title>

    <style>

        body {

            background-color: #FFFFFF; padding: 0; margin: 0;

        }

    </style>

</head>

<body style="background-color: #FFFFFF; padding: 0; margin: 0;">

<table border="0" cellpadding="0" cellspacing="10" height="100%" bgcolor="#FFFFFF" width="100%" style="max-width: 650px;" id="bodyTable">

    <tr>

        <td align="center" valign="top">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailContainer" style="font-family:Arial; color: #333333;">

                <!-- Logo -->

                <tr>

                    <td align="left" valign="top" colspan="2" style="border-bottom: 1px solid #CCCCCC; padding-bottom: 10px;">

                        <img alt="${site-name}" border="0" src="${site-url}/assets/img/favicon.ico" title="${site-name}" class="sitelogo" width="10%" style="max-width:250px;" />

                    </td>

                </tr>

                <!-- Title -->

                <tr>

                    <td align="left" valign="top" colspan="2" style="border-bottom: 1px solid #CCCCCC; padding: 20px 0 10px 0;">

                        <span style="font-size: 18px; font-weight: normal;">FORGOT PASSWORD</span>

                    </td>

                </tr>

                <!-- Messages -->

                <tr>

                    <td align="left" valign="top" colspan="2" style="padding-top: 10px;">

                        <span style="font-size: 12px; line-height: 1.5; color: #333333;">
                            <!-- After you reset your password, any credit card information stored in My Account will be deleted as a security measure. -->
                            We have sent you this email in response to your request to reset your password on ${site-name}. 

                            <br/><br/>

                             Your code is <h1>${OTP-CODE}.</h1>Use this code once you open the password reset link   

                            <br/><br/>

                            To reset your password for <a href="${site-url}">${site-url}</a>, please follow the link below:

                            <a href="${reset-password-url}">${reset-password-url}</a>

                            <br/><br/>

                            We recommend that you keep your password secure and not share it with anyone.If you feel your password has been compromised, you can change it by going to your ${site-name} My Account Page and clicking on the "Change Email Address or Password" link.

                            <br/><br/>

                            If you need help, or you have any other questions, feel free to email <a href="${customer-service-email}"> ${customer-service-email}</a>. or call ${site-toll-free-number}

                            <br/><br/>

                            ${site-name} Customer Service

                            <br/><br/>

                             <i>The sent OTP code is valid up to 15 mins</i> 

                        </span>

                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

</body>

</html>