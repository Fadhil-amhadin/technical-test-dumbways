#function
def draw(panjang):
	if(panjang % 2 == 0):
		print("+" * panjang)
		for i in range(panjang-2):
			for j in range(panjang):
				if (j+1) % 3 == 0:
					print("+", end="")
				else:
					print("=", end="")
			print("")
		print("+" * panjang)
	else:
		print("Masukkan bilangan genap sebagai parameter")
		

#function called
draw(8)
draw(9)
