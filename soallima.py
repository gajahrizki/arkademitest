def untung(y):
  a = []
  for i in range(0, len(y)):
    for j in range(i, len(y)):
      if (i == j):
        hasil = 0
      else:
        hasil = (0 - y[i]) + y[j]
        a.append(hasil)
  max_hasil = max(a)
  if (max_hasil > 0):
    print (max_hasil)
  else:
    print ('tidak ada profit hari ini')

harga = [33, 29, 11, 3]
untung(harga)