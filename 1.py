#variable
saldo = 3000000
bunga = 2.5
saldo_sekarang = 0
jumlah_bulan = 12

#function
def penghitung_saldo(sld, bnga, bulan):
	for i in range(bulan):
		sld += (sld * (2.5/100))
	print("Saldo setelah",bulan,"bulan =","{:.2f}".format(sld),"rupiah")

#function called
penghitung_saldo(saldo,bunga,jumlah_bulan)

