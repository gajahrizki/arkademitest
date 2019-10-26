def divide(div):
  x, y = [], []
  a, b, c = [], [] ,[]
  for i in range (len(div)):
    if(div[i] == 0):
      x.append(i)
  e = x[0]
  f = x[1]
  for j in range (x[0]):
    a.append(div[j])
  
  for k in range(e+1 , x[1] ):
    b.append(div[k])
  
  for l in range (f+1, len(div)):
    c.append(div[l])

  sort(a)
  sort(b)
  sort(c)
  hasil = str(a+b+c)
  return hasil  

def sort(nums):
	swapped = True
	while swapped:
		swapped = False
		for i in range (len(nums)-1):
			if nums[i] > nums[i+1]:
				nums[i], nums[i+1] = nums[i+1], nums[i]
				swapped = True
  

number = [5,9,5,6,5,6,0,1,5,9,4,6,6,0,5,6]
lu = divide(number)
print(lu)
