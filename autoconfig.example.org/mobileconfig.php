<?php
header('Content-Type: application/xml');
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$host = substr(strrchr($email, "@"), 1);
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
        <key>PayloadContent</key>
        <array>
                <dict>
                        <key>EmailAccountDescription</key>
                        <string><?php echo $email ?> - CDMON</string>
                        <key>EmailAccountName</key>
                        <string><?php echo $email ?></string>
                        <key>EmailAccountType</key>
                        <string>EmailTypeIMAP</string>
                        <key>EmailAddress</key>
                        <string><?php echo $email ?></string>
                        <key>IncomingMailServerAuthentication</key>
                        <string>EmailAuthPassword</string>
                        <key>IncomingMailServerHostName</key>
                        <string><?php echo $host; ?></string>
                        <key>IncomingMailServerPortNumber</key>
                        <integer>993</integer>
                        <key>IncomingMailServerUseSSL</key>
                        <true/>
                        <key>IncomingMailServerUsername</key>
                        <string><?php echo $email ?></string>
                        <key>OutgoingMailServerAuthentication</key>
                        <string>EmailAuthPassword</string>
                        <key>OutgoingMailServerHostName</key>
                        <string><?php echo $host; ?></string>
                        <key>OutgoingMailServerPortNumber</key>
                        <integer>587</integer>
                        <key>OutgoingMailServerUseSSL</key>
                        <true/>
                        <key>OutgoingMailServerUsername</key>
                        <string><?php echo $email ?></string>
                        <key>OutgoingPasswordSameAsIncomingPassword</key>
                        <true/>
                        <key>PayloadDescription</key>
                        <string>Email autoconfiguration profile</string>
                        <key>PayloadDisplayName</key>
                        <string><?php echo $email ?> - Email</string>
                        <key>PayloadIdentifier</key>
                        <string>org.<?php echo $host; ?>.autoconfig</string>
                        <key>PayloadType</key>
                        <string>com.apple.mail.managed</string>
                        <key>PayloadUUID</key>
                        <string>54ea0cab-0526-4909-8ff1-b3908dc8eee8</string>
                        <key>PayloadVersion</key>
                        <real>1</real>
                        <key>SMIMEEnablePerMessageSwitch</key>
                        <false/>
                        <key>SMIMEEnabled</key>
                        <false/>
                        <key>disableMailRecentsSyncing</key>
                        <false/>
                </dict>
        </array>
        <key>PayloadDescription</key>
        <string><?php echo ucfirst($host); ?> autoconfiguration</string>
        <key>PayloadDisplayName</key>
        <string><?php echo $email ?> - Email</string>
        <key>PayloadIdentifier</key>
        <string>org.<?php echo $host; ?>.autoconfig</string>
        <key>PayloadOrganization</key>
        <string><?php echo ucfirst($host); ?></string>
        <key>PayloadRemovalDisallowed</key>
        <false/>
        <key>PayloadType</key>
        <string>Configuration</string>
        <key>PayloadUUID</key>
        <string>54ea0cab-0526-4909-8ff1-b3908dc8eee8</string>
        <key>PayloadVersion</key>
        <integer>1</integer>
</dict>
</plist>