Running Metasploit Remotely
<br><br>
Metasploit Framework can be run as a service and used remotely. 
<br><br>
The main advantage of running Metasploit remotely is that you can control it with your own custom security scripts <br>
or you can control it from anywhere in the world from any device that has a terminal and supports Ruby.</font>
<br><br>
This module starts msfrpcd. 
<br><br>
Using the MSFRPCD Utility :
<br><br>

<font style='font-family: monospace; font-weight: bold;'>
msfrpcd -OPTIONS
<br>
OPTIONS:
<br><br>
    -P <opt>  Specify the password to access msfrpcd<br>
    -S        Disable SSL on the RPC socket<br>
    -U <opt>  Specify the username to access msfrpcd<br>
    -a <opt>  Bind to this IP address (default: 0.0.0.0)<br>
    -c        (JSON-RPC) Path to certificate (default: /root/.msf4/msf-ws-cert.pem)<br>
    -f        Run the daemon in the foreground<br>
    -h        Help banner<br>
    -j        (JSON-RPC) Start JSON-RPC server<br>
    -k        (JSON-RPC) Path to private key (default: /root/.msf4/msf-ws-key.pem)<br>
    -n        Disable database<br>
    -p <opt>  Bind to this port (default: 55553)<br>
    -t <opt>  Token Timeout seconds (default: 300)<br>
    -u <opt>  URI for Web server<br>
    -v        (JSON-RPC) SSL enable verify (optional) client cert requests<br>
</font>
