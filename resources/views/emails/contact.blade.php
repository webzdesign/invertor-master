  
<table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
<tbody>
    <tr>
    <td class="o_bg-light o_px-xs" align="center" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;">
        <table class="o_block-xs" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="max-width: 800px;margin: 0 auto;">
        <tbody>
            <tr>
            <td class="o_bg-white o_px-md o_py o_sans o_text o_text-secondary" align="center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #ffffff;color: #424651;padding-left: 24px;padding-right: 24px;padding-top: 16px;padding-bottom: 16px;">
                <h4 style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 8px;color: #242b3d;font-size: 18px;line-height: 23px;">
                Hello, Admin
                </h4>
                <p style="margin-top: 0px;margin-bottom: 0px;">You have received a new message via the Contact Us form.</p>
                <p style="margin-top: 8px;margin-bottom: 0px;">Here are the details:</p>
                <table style="margin-top: 20px;">
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <td><strong>Phone:</strong></td>
                    <td>{{ $contact->phone }}</td>
                </tr>
                <tr>
                    <td><strong>Message:</strong></td>
                    <td>{{ $contact->message }}</td>
                </tr>
                </table>
            </td>
            </tr>
        </tbody>
        </table>
    </td>
    </tr>
</tbody>
</table>
  