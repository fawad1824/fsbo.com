<!--
 This is an example of a simple transactional email.
 License: MIT
 Credit: Instagram
-->

<body style="margin:0;padding:0" dir="ltr" bgcolor="#ffffff">
  <table border="0" cellspacing="0" cellpadding="0" align="center" id="m_-7626415423304311386email_table" style="border-collapse:collapse">
    <tbody>
      <tr>
        <td id="m_-7626415423304311386email_content" style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;background:#ffffff">
          <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
            <tbody>
              <tr>
                <td height="20" style="line-height:20px" colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td height="1" colspan="3" style="line-height:1px"></td>
              </tr>
              <tr>
                <td>
                  <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;text-align:center;width:100%">
                    <tbody>
                      <tr>
                        <td width="15px" style="width:15px"></td>
                        <td style="line-height:0px;max-width:600px;padding:0 0 15px 0">
                          <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                            <tbody>
                              <tr>
                                <td style="width:100%;text-align:left;height:33px">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td width="15px" style="width:15px"></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table border="0" width="430" cellspacing="0" cellpadding="0" style="border-collapse:collapse;margin:0 auto 0 auto">
                    <tbody>
                      <tr>
                        <td>
                          <table border="0" width="430px" cellspacing="0" cellpadding="0" style="border-collapse:collapse;margin:0 auto 0 auto;width:430px">
                            <tbody>
                              <tr>
                                <td width="15" style="display:block;width:15px">&nbsp;&nbsp;&nbsp;</td>
                              </tr>
                              <tr>
                                <td>
                                  <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                                    <tbody>
                                      <tr>
                                        <td>
                                          <table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                                            <tbody>
                                              <tr>
                                                <td width="20" style="display:block;width:20px">&nbsp;&nbsp;&nbsp;</td>
                                                <td>
                                                  <table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                                                    <tbody>
                                                      <tr>
                                                        <td>
                                                          <p style="margin:10px 0 10px 0;color:#565a5c;font-size:18px">Hi {{ $user->name }}!</p>
                                                          <p style="margin:10px 0 10px 0;color:#565a5c;font-size:18px">Please confirm your <span class="il">email</span> to <span style="color:#2b5a83" id="m_-7626415423304311386body_email">{{ $user->email }}</span>. <span class="il">Confirm</span> your <span class="il">email</span> address to continue capturing and Confirm your registration in FBSO.com</p>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td height="20" style="line-height:20px">&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                        <a href="{{url('/optconfirm')."/".$user->email}}" style="color:#1b74e4;text-decoration:none;display:block;width:370px" target="_blank">
                                                            <table border="0" width="390" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                                                              <tbody>
                                                                <tr>
                                                                  <td style="border-collapse:collapse;border-radius:3px;text-align:center;display:block;border:solid 1px #009fdf;padding:10px 16px 14px 16px;margin:0 2px 0 auto;min-width:80px;background-color:#47a2ea">
                                                                    <a href="{{url('/optconfirm')."/".$user->email}}" style="color:#1b74e4;text-decoration:none;display:block" target="_blank">
                                                                      <center>
                                                                        <font size="3"><span style="font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;white-space:nowrap;font-weight:bold;vertical-align:middle;color:#fdfdfd;font-size:16px;line-height:16px">
                                                                            <span class="il">Confirm</span>&nbsp;<span class="il">email</span>&nbsp;address</span>
                                                                        </font>
                                                                      </center>
                                                                    </a></td>
                                                                </tr>

                                                              </tbody>
                                                            </table>
                                                          </a></td>
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                            <br><br><br>
                                                            Regards, <br>
                                                            FBSO.com
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td height="20" style="line-height:20px">&nbsp;</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td height="10" style="line-height:10px" colspan="1">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
            </tr>
            </tbody>
        </td>
      </tr>
    </tbody>
  </table>
</body>
