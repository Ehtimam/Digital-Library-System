import socket
s = socket.socket(socket.AF_INET,socket.SOCK_STREAM)
port =  80
host_ip = "webcode.me"
s.connect((host_ip,port))
print('connected')

msg=b'GET / HTTP/1.1\r\nHOST:webcode.me\r\n'
msg+=b'Accept: text/html\r\nConnecttion\r\n'
msg+=b'\r\n'

s.sendall(msg)

while True:
    data=s.recv(1024)
    if not data:
        break
    data=data.decode()
    print(data)    