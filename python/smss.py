import serial
import sys
recipient = str(sys.argv[1])
message = str(sys.argv[2])

port = serial.Serial("/dev/ttyUSB0", baudrate=115200, timeout=3.0)
try: 

    port.write("AT\r\n".encode())

    port.write(b'AT+CMGF=1\r')

    port.write(b'AT+CMGS="'+ recipient.encode() +b'"\r')

    port.write(message.encode() + b"\r")

    port.write(bytes([26]))

    print("true")
except: 
    print('false')
finally: 
    port.close(); 
