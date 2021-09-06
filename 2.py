#variable
data = [['a','c','b','e','d'],['g','e','f']]
datalain = [['g','h','i','j'], ['a','c','b','e','d'],['g','e','f']]

#quicksort function
def quicksort(data):
	if len(data) <= 1:
		return data
	
	kurang_dari_pivot = []
	lebih_dari_pivot = []
	pivot = data[0]
	
	for i in data[1:]:
		if i <= pivot:
			kurang_dari_pivot.append(i)
		else:
			lebih_dari_pivot.append(i)
	return quicksort(kurang_dari_pivot) + [pivot] + quicksort(lebih_dari_pivot)

#length quicksort function
def quicksort_length(data):
	if len(data) <= 1:
		return data
	
	kurang_dari_pivot = []
	lebih_dari_pivot = []
	pivot = data[0]
	
	for i in data[1:]:
		if len(i) <= len(pivot):
			kurang_dari_pivot.append(i)
		else:
			lebih_dari_pivot.append(i)
	return quicksort(kurang_dari_pivot) + [pivot] + quicksort(lebih_dari_pivot)
	
#main function
def sorting_dua_dimensi(data):
	kontainer = []
	for i in range(len(data)):
		kontainer.append(quicksort(data[i]))
	return quicksort_length(kontainer)

#main function called/testing
print(sorting_dua_dimensi(data))
print(sorting_dua_dimensi(datalain))
