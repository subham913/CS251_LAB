import re 
import math
import sys
string=sys.argv[1]
base=sys.argv[2]
if re.match("^[0-9]+$",base):
	size=len(base)
	b=ord(base[0])-48
	for l in range(1,size):
		b=b*10+ord(base[l])-48
	if(b>36 or b<2):
		print "Enter a valid base"
	else:
		lst=[]
		for i in range (0,b):
			if(i<10):
				lst.append(chr(i+48))
			elif(i>=10):
				lst.append(chr(i+55))
			else:
				break
		flag=0
		validate=0
		check=0
		global str1
		global str2
		global val
		global pos
		val=0
		if(string[0]=='-'):
			flag=1
			str1=string[1:]
		else:
			str1=string[:]
		if re.match("^[A-Z0-9]*[\.]?[A-Z0-9]+$",str1):
			if('.' in str1):
				pos=str1.find('.')
				str2=str1[:pos]+str1[pos+1:]
				check=1
			else:
				str2=str1[:]
			length=len(str2)
			if (check==0):
				pos=length
			for i in range(0,length):
				if(lst.count(str2[i])>0):
					validate=1
				else:
					validate=0
			if(validate==0):
				print"Invalid Input"
			else:
				for i in range(0,length):
					pos-=1
					tmp=ord(str2[i])
					if(tmp>=48 and tmp<=57):
						val=val+(tmp-48)*pow(b,pos)
					else:
						val=val+(tmp-55)*pow(b,pos)
				if(val<=999999999):
					if(flag==1):
						if(val%1!=0):
							valid=str('%.6f' %val)
							valid=valid.rstrip("0")
							print "-"+valid
						else:
							print"-%d"%val
					else:
						if(val%1!=0):
							valid=str('%.6f' %val)
							valid=valid.rstrip("0")
							print valid
						else:
							print"%d" %val
				else:
					print "out of range"
						
		else:
			print "Invalid Input"
else:
	print "Enter a valid base"

