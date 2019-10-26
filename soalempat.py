def olahdata(data):
  hasil = []
  for isi1 in data:
    hasil.append({'name' : isi1['name'], 'info' : isi1['info']})
    for isi2 in data:
      hasil.append({'name' : isi2['name'], 'info' : isi2['info']})
  return hasil

data= [
  {
    'name': "Movies", 'info': "category_name",
    'data': [
      { 'name': "Interstellar", 'info': "category_data" },
      { 'name': "Dark Knight", 'info': "category_data" },
    ]
  },
  {
    'name': "Music", 'info': "category_name",
    'data': [
      { 'name': "Adams", 'info': "category_data" },
      { 'name': "Nirvana", 'info': "category_data" },
    ]
  }
]

hasil = olahdata(data)
print (hasil)
